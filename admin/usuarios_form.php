<? ob_start(); ?>
<?php
session_start();

 include_once '../BD/ConexionGeneral.php';
 include_once '../BD/UsuarioDAO.php';    
 include_once '../videnn/Producto.php'; 

if(isset($_SESSION['views'])) {
	$_SESSION['views']=$_SESSION['views']+1;	  

$titulo = 'Creación de un nuevo elemento de usuarios';
$intro = 'Llene el siguiente formulario para crear el registro de un nuevo elemento de usuarios.';
$nombre = $_POST['nombre'];
$usuario = $_POST['usuario']; 
$contrasenia = $_POST['contrasenia'];
$registro = $_POST['registrarse'];

if(isset($registro)) {

	include 'includes/funciones.php';

	if (isset($nombre) && isset($usuario) && isset($contrasenia)) {
		$usuarioDAO = new UsuarioDAO();
		$usuarioDAO -> insertarUsuario($nombre, $usuario, $contrasenia);		
		header("Location: ./?modulo=usuarios");
	} else {
		echo 'Fallo el agregado.';
	}

}
?>
<h2><?=$titulo?></h2>
<form id="form1" method="post" action="usuarios_form.php" class="marginTop20 form-horizontal blackLabel" enctype="multipart/form-data">
	<fieldset>
		<div class="control-group span12">
			<label for="nombre" class="control-label">Nombre</label>
			<div class="controls"><input type="text" name="nombre" id="nombre" value="<?=$d[nombre]?>" class="input-xlarge required" /></div>
		</div>
		<div class="control-group span12">
			<label for="genero" class="control-label">Usuario</label>
			<div class="controls"><input type="text" name="usuario" id="usuario" value="<?=$d[usuario]?>" class="input-xlarge required" /></div>
		</div>
		<div class="control-group span12">
			<label for="genero" class="control-label">Contraseña</label>
			<div class="controls"><input type="password" name="contrasenia" id="contrasenia" value="<?=$d[contrasenia]?>" class="input-xlarge required" /></div>
		</div>		
		<div class="form-actions btn-group span7">
			<a class="btn btn-danger" href="?modulo=usuarios"><i class="icon-remove icon-white"></i> Cancelar</a>
			<button class="btn btn-primary" type="submit" name="registrarse"><i class="icon-ok icon-white"></i> Registrar</button>
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
<?php
} else {
	echo "No session Started. Redirecting to index in 3 seconds.";
 	header("Refresh: 3; url=../index.php");
}
?>
<? ob_flush(); ?>