<? ob_start(); ?>
<?php
session_start();
include_once '../BD/ConexionGeneral.php';
include_once '../ControladorProductoAdmin.php';

// store session data
$_SESSION['views']=1;

$borrar = $_POST['borrar'];


	if(isset($borrar)) {
		$id_producto = $_POST['varname'];
/*		$id_producto = $producto->getId_producto();*/
		$controladorProducto = new ControladorProductoAdmin();
	    $controladorProducto->eliminarProductoC($id_producto);
	    echo "Success delete of product with id = $id_producto. Redirecting to index in 5 seconds.";
	    header("Refresh: 5; url=index.php");
    } 
?>

<? ob_flush(); ?>

