<?php
//Ingreso y actualizacion
if(isset($_POST[nombre]))
{
	include '../includes/db.php';
	include 'includes/funciones.php';
		
	header("Location: ./?modulo=usuarios_form&id={$id}&registroExitoso");
}

	$titulo = 'Creación de un nuevo elemento de usuarios';
	$intro = 'Llene el siguiente formulario para crear el registro de un nuevo elemento de usuarios.';


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
<h2><?=$titulo?></h2>
<div class="alert alert-block alert-warning <?=$wh?>">
  <a class="close" data-dismiss="alert">×</a>
  El registro ha sido guardado exitosamente.
</div>
<script>setTimeout(function(){ $('.alert:first').hide(); $('.alert:last').show();  },4000);</script>
<div class="alert alert-block alert-info <?=$ih?>">
  <a class="close" data-dismiss="alert">×</a>
  <?=$intro?>
</div>
<form id="form1" method="post" action="usuarios_form.php" class="marginTop20 form-horizontal blackLabel" enctype="multipart/form-data">
	<fieldset>
		<div class="control-group span12">
			<label for="nombre" class="control-label">Nombre</label>
			<div class="controls"><input type="text" name="nombre" id="nombre" value="<?=$d[nombre]?>" class="input-xlarge required" /></div>
		</div>
		<div class="control-group span12">
			<label for="genero" class="control-label">Apellido</label>
			<div class="controls"><input type="text" name="genero" id="genero" value="<?=$d[genero]?>" class="input-xlarge required" /></div>
		</div>
		<div class="control-group">
			<label for="imagen" class="control-label">Foto</label>
			<div class="controls">
				<?php if(strlen($d[imagen]) > 0){ ?>
				<img src="data:image/png;base64,<?=base64_encode($d[imagen])?>" />
				<br />
				<?php } ?>
				<input type="file" name="imagen" id="imagen" class="input-xlarge" accept="image/png" />
			</div>
		</div>
		<div class="form-actions btn-group span7">
			<a class="btn btn-danger" href="?modulo=usuarios"><i class="icon-remove icon-white"></i> Cancelar</a>
			<button class="btn btn-primary" type="submit"><i class="icon-ok icon-white"></i> Registrar</button>
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