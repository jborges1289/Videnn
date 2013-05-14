<? ob_start(); ?>
<?php
session_start();
  include_once '../BD/ConexionGeneral.php';
  include_once '../BD/ProductoDAOAdmin.php';  
  include_once '../videnn/Producto.php';
  
if(isset($_SESSION['views'])) {
	$_SESSION['views']=$_SESSION['views']+1;	  

$titulo = 'Creación de un nuevo elemento de productos';
$intro = 'Llene el siguiente formulario para crear el registro de un nuevo elemento de productos.';


if(isset($_POST['registrarse'])) {

	include 'includes/funciones.php';

$nombre = $_POST['nombre'];
$descripcion = $_POST['descripcion']; 
$precio = $_POST['precio'];
$tipo = $_POST['tipo'];
$tmp_name = $_FILES['imagen']['tmp_name'];
$url_name = $_FILES['imagen']['name'];

if($tipo == 1) {
$uploaddir = '../img/botones/';	
}

if($tipo == 2) {
$uploaddir = '../img/espectaculares/';	
}

if($tipo == 3) {
$uploaddir = '../img/lonas/';	
}

if($tipo == 4) {
$uploaddir = '../img/estructuras/';	
}

if($tipo == 5) {
$uploaddir = '../img/offset/';	
}


$uploading =  move_uploaded_file($tmp_name, $uploaddir . $url_name); 
$url = $uploaddir . $url_name;

	if (isset($nombre) && isset($descripcion) && isset($precio) && $uploading) {
		$ProductoDAOAdmin = new ProductoDAOAdmin();
		$ProductoDAOAdmin -> insertarProducto($nombre, $descripcion, $precio, $url, $tipo);
		echo '<script languaje="javascript"> alert("Agregado exitoso.")</script>';
		header("Refresh: 0; url=./?modulo=productos");
	} else {
		echo '<script languaje="javascript"> alert("Fallo el agregado.")</script>';
		header("Refresh: 0; url=./?modulo=productos");
	}

}
?>

<h2><?=$titulo?></h2>
<form id="form1" method="post" action="productos_form.php" class="marginTop20 form-horizontal blackLabel" enctype="multipart/form-data">
	<fieldset>
		<div class="control-group span12">
			<label for="nombre" class="control-label">Nombre:</label>
			<div class="controls"><input type="text" name="nombre" id="nombre" value="" class="input-xlarge required" /></div>
		</div>
		<div class="control-group">
			<label for="descripcion" class="control-label">Descripción:</label>
      <div class="controls"><textarea name="descripcion" id="descripcion" rows="3" class="input-xlarge required"></textarea></div>
    </div>
		<div class="control-group span12">
			<label for="precio" class="control-label">Precio:</label>
			<div class="controls"><input type="text" name="precio" id="precio" value="" class="input-xlarge required" /></div>
		</div>
		<div class="control-group">
			<label for="imagen" class="control-label">Imagen</label>
			<div class="controls">
				<input type="file" name="imagen" id="imagen" class="input-xlarge" accept="image/jpeg" />
			</div>
		<div class="control-group span12">
			<label for="tipo" class="control-label">Tipo:</label>
			<div class="controls">
			<select name="tipo">
				<option>1 Botones</option>
				<option>2 Espectaculares</option>
				<option>3 Lonas</option>								
				<option>4 Toldos</option>				
				<option>5 Offset</option>				
			</select>
			</div>
		</div>
		</div>
		<div class="form-actions btn-group span7">
			<a class="btn btn-danger" href="?modulo=productos"><i class="icon-remove icon-white"></i> Cancelar</a>
			<button class="btn btn-primary" type="submit" name="registrarse" ><i class="icon-ok icon-white"></i> Registrar</button>
		</div>
	</fieldset>
</form>
<script language="javascript" type="text/javascript">
$("#form1").submit(function(){
	var x = "";
	$('.required').each(function(){
		var t = $(this);
		t.parents('.control-group').removeClass('error');
		if(!t.val() || $.trim(t.val()).length == 0) //Es obligatorio y vacío
		{
			x += "- "+$('LABEL[for="'+t.attr('id')+'"]').text()+"\n";
			t.parents('.control-group').addClass('error');
		}
	});
	
	if(x.length>0)
	{
		alert("Los siguientes campos no fueron llenados correctamente:\n\n"+x);
		return false;
	}
	else
	{		
		
		return true;
	}
	return false;
});
</script>
<?php
} else {
	echo '<script languaje="javascript"> alert("No ha iniciado sesion. Por favor inicie sesion.")</script>';
	header("Refresh: 0; url=../index.php");
}
?>
<? ob_flush(); ?>