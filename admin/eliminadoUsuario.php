<? ob_start(); ?>
<?php
session_start();
include_once '../BD/ConexionGeneral.php';
include_once '../ControladorUsuario.php';

$borrar = $_POST['borrar'];

	if(isset($borrar)) {
		$id_usuario = $_POST['varname'];
		$ControladorUsuario = new ControladorUsuario();
	    $ControladorUsuario->eliminarUsuarioC($id_usuario);	    
	    echo '<script languaje="javascript"> alert("La eliminacion del usuario fue exitosa.")</script>';
		header("Refresh: 0; url=./?modulo=usuarios");
    } 

?>

<? ob_flush(); ?>

