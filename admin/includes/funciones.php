<?php
function p($a)
{
	echo "<pre>";
	print_r($a);
	echo "</pre>";
}

function isAdmin()
{
	@session_start();
	if($_SESSION[admin] <> 1)
	{
		echo '<script>window.location="cerrar";</script>';
		exit;
	}
}

function active($s)
{
	if($_GET[modulo] == $s)
	{
		echo "class='active'";
	}
}

function getTable($s)
{
	global $db;
	return $db->fetch("SELECT * FROM ".$s);
}

function now()
{
	return date('Y-m-d h:i:s');
}

function delete_dir($path)
{
	$files = glob("$path/*");
	foreach($files as $file)
	{
		if(is_dir($file) && !is_link($file))
		{
			delete_dir($file);
		}
		else
		{
			unlink($file);
		}
	}
	rmdir($path);
}

function selected($esperado,$actual)
{
	if($esperado == $actual)
	{
		return "selected='selected'";
	}
}

function checked($esperado,$actual)
{
	if($esperado == $actual)
	{
		return "checked='checked'";
	}
}

function money($n)
{
	return number_format($n, 2, ".", ","); 
}

//Obtener key de tabla
function dbKey($tabla)
{
	global $db;
	$datos = $db->fetchRow("SHOW KEYS FROM {$tabla} WHERE Key_name = 'PRIMARY'");
	$key = $datos['Column_name'];
	return $key;
}

function obtenerImagen($imagen, $alto, $ancho, $calidad)
{
	require_once('thumb/phpthumb.class.php');
	$phpThumb = new phpThumb();
	$phpThumb->resetObject();
	$phpThumb->setSourceFilename($imagen);
	if($ancho > 0)$phpThumb->setParameter('w',$ancho);
	$phpThumb->setParameter('q',$calidad);
	$phpThumb->setParameter('f','jpeg');
	$phpThumb->setParameter('config_output_format','jpeg');
	$phpThumb->setParameter('config_imagemagick_path','');
	// $output_filename = basename($_FILES['userfile']['name']).'_'.$thumbnail_width.'.'.$phpThumb->config_output_format;
	if($phpThumb->GenerateThumbnail())
	{ // this line is VERY important, do not remove it!
		$output_size_x = ImageSX($phpThumb->gdimg_output);
		$output_size_y = ImageSY($phpThumb->gdimg_output);
		$phpThumb->RenderOutput();
		return $phpThumb->outputImageData;
	}
}

function payPalUrl($folio)
{
	global $db, $root;
	$folio = urlencode($folio);
	$importe = urlencode($db->fetchCell("SELECT importe FROM reservaciones WHERE id = {$folio}"));
	$nombreItem = urlencode("Compra en ".TITULO." con folio [ {$folio} ]");
	$exito = urlencode($root."?modulo=pago_recibido&id={$folio}");
	$fracaso = urlencode($root."?modulo=pago_rechazado");	
	$biz = EMAIL1;
	$url = "https://www.paypal.com/cgi-bin/webscr?cmd=_xclick&business={$biz}&lc=MX&item_name={$nombreItem}&item_number={$folio}&amount={$importe}&currency_code=USD&button_subtype=services&no_note=0&cn=Instrucciones%20especiales%20al%20vendedor%3a&no_shipping=1&rm=1&return={$exito}&cancel_return={$fracaso}&bn=PP%2dBuyNowBF%3abtn_paynowCC_LG%2egif%3aNonHosted";
	return $url;
}

function mandarEmail($titulo, $mensaje, $destino)
{
	if(!class_exists("phpmailerException"))
	{
		include "includes/mailer/class.phpmailer.php";
	}
	$mail = new PHPMailer ();

	$mail -> IsHTML (true);
	$mail -> AddReplyTo(EMAIL1);
	$mail -> Sender = EMAIL2;
	$mail -> FromName = utf8_decode(TITULO);
	$mail -> AddAddress($destino);
	$mail -> Subject = $titulo;
	$mail -> Body = $mensaje;
	$mail -> Send();
}
?>