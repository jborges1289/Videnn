<? ob_start(); ?>
<?php
session_start();
include_once '../BD/ConexionGeneral.php';
include_once '../ControladorProductoAdmin.php';

$borrar = $_POST['borrar'];


	if(isset($borrar)) {
		$id_producto = $_POST['varname'];
		$controladorProducto = new ControladorProductoAdmin();
	    $controladorProducto->eliminarProductoC($id_producto);
	    echo '<script languaje="javascript"> alert("La eliminacion del producto fue exitosa.")</script>';
		header("Refresh: 0; url=./?modulo=productos");
    } 

?>

<? ob_flush(); ?>

