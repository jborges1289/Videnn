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


if(isset($_POST['registrarse'])) {

	include 'includes/funciones.php';

$nombre = $_POST['nombre'];
$usuario = $_POST['usuario']; 
$contrasenia = $_POST['contrasenia'];

	if (isset($nombre) && isset($usuario) && isset($contrasenia)) {
		$usuarioDAO = new UsuarioDAO();
		$usuarioDAO -> insertarUsuario($nombre, $usuario, $contrasenia);		
		echo '<script languaje="javascript"> alert("Agregado exitoso.")</script>';
		header("Refresh: 0; url=./?modulo=usuarios");
	} else {
		echo '<script languaje="javascript"> alert("Fallo el agregado.")</script>';
		header("Refresh: 0; url=./?modulo=usuarios");
	}

}
?>
<h2><?=$titulo?></h2>
<form id="form1" method="post" action="usuarios_form.php" class="marginTop20 form-horizontal blackLabel" enctype="multipart/form-data">
	<fieldset>
		<div class="control-group span12">
			<label for="nombre" class="control-label">Nombre</label>
			<div class="controls"><input type="text" name="nombre" id="nombre" value="" class="input-xlarge required" /></div>
		</div>
		<div class="control-group span12">
			<label for="genero" class="control-label">Usuario</label>
			<div class="controls"><input type="text" name="usuario" id="usuario" value="" class="input-xlarge required" /></div>
		</div>
		<div class="control-group span12">
			<label for="genero" class="control-label">Contraseña</label>
			<div class="controls"><input type="password" name="contrasenia" id="contrasenia" value="" class="input-xlarge required" /></div>
		</div>		
		<div class="form-actions btn-group span7">
			<a class="btn btn-danger" href="?modulo=usuarios"><i class="icon-remove icon-white"></i> Cancelar</a>
			<button class="btn btn-primary" type="submit" name="registrarse"><i class="icon-ok icon-white"></i> Registrar</button>
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