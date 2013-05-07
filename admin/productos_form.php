<?php

include_once '/BD/ConexionGeneral.php';
//Ingreso y actualizacion
if(isset($_POST[nombre]))
{
	include 'includes/funciones.php';
		
	header("Location: ./?modulo=productos_form&id={$id}&registroExitoso");
}

	//Marquesinas
	$nombre = 'Creación de una nuevo producto';
	$intro = 'Llene el siguiente formulario para crear el registro de una nuevo producto.';


//Avisos
if(isset($_GET[registroExitoso]))
{
	$ih = 'hidden';
}
else
{
	$wh = 'hidden';
}
?>
<h2><?=$nombre?></h2>
<div class="alert alert-block alert-warning <?=$wh?>">
  <a class="close" data-dismiss="alert">×</a>
  El registro ha sido guardado exitosamente.
</div>
<script>setTimeout(function(){ $('.alert:first').hide(); $('.alert:last').show();  },4000);</script>
<div class="alert alert-block alert-info <?=$ih?>">
  <a class="close" data-dismiss="alert">×</a>
  <?=$intro?>
</div>
<form id="form1" method="post" action="productos_form.php" class="marginTop20 form-horizontal blackLabel" enctype="multipart/form-data">
	<fieldset>
		<div class="control-group span12">
			<label for="nombre" class="control-label">Nombre:</label>
			<div class="controls"><input type="text" name="nombre" id="nombre" value="<?=$d[nombre]?>" class="input-xlarge required" /></div>
		</div>
		<div class="control-group">
			<label for="descripcion" class="control-label">Descripción:</label>
      <div class="controls"><textarea name="descripcion" id="descripcion" rows="3" class="input-xlarge required"><?=$d[descripcion]?></textarea></div>
    </div>
		<div class="control-group span12">
			<label for="precio" class="control-label">Precio:</label>
			<div class="controls"><input type="text" name="precio" id="precio" value="<?=$d[precio]?>" class="input-xlarge required" /></div>
		</div>
		<div class="control-group">
			<label for="imagen" class="control-label">Imagen</label>
			<div class="controls">
				<?php if(strlen($d[imagen_chica]) > 0){ ?>
				<a href="data:image/jpeg;base64,<?=base64_encode($d[imagen_grande])?>" target="_<?=$d[id]?>"><img src="data:image/jpeg;base64,<?=base64_encode($d[imagen_chica])?>" /></a>
				<?php } ?>
				<input type="file" name="imagen" id="imagen" class="input-xlarge" accept="image/jpeg" />
			</div>
		</div>
		<div class="form-actions btn-group span7">
			<a class="btn btn-danger" href="?modulo=productos"><i class="icon-remove icon-white"></i> Cancelar</a>
			<button class="btn btn-primary" type="submit" ><i class="icon-ok icon-white"></i> Registrar</button>
		</div>
	</fieldset>
  <input type="hidden" name="identificador" value="<?=$_GET[id]?>" />
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