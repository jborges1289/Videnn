<? ob_start(); ?>
<?php
session_start();
  include_once '../BD/ConexionGeneral.php';
  include_once '../BD/ProductoDAOAdmin.php';  
  include_once '../videnn/Producto.php';
  
if(isset($_SESSION['views'])) {
	$_SESSION['views']=$_SESSION['views']+1;	  


$titulo = 'Edición de un nuevo elemento de productos';
$intro = 'Llene el siguiente formulario para editar el registro del elemento de productos.';


if(isset($_POST['editar'])) {

	include 'includes/funciones.php';
	include_once '../ControladorProductoAdmin.php';

$id_producto = $_POST['varname'];

$controladorProducto = new ControladorProductoAdmin();
$producto = $controladorProducto->obtenerProductoC($id_producto);

if(isset($producto)) {

$id = $producto->getId_producto();
$nombre = $producto->getNombre_Producto();
$descripcion = $producto->getDesc_producto();
$precio = $producto->getPrecio_unitario();
}

}

if(isset($_POST['actualizar'])) {

	include_once '../ControladorProductoAdmin.php';

	$id = $_POST['id'];
	$nombre = $_POST['nombre'];
	$descripcion = $_POST['descripcion'];
	$precio = $_POST['precio'];	
	$controladorProducto = new ControladorProductoAdmin();
	$controladorProducto->actualizarProductoC($id, $nombre, $descripcion, $precio);
	echo '<script languaje="javascript"> alert("Editado del producto, exitoso.")</script>';
		header("Refresh: 0; url=./?modulo=productos");
	} 
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title> .: Videnn - Panel de control :.</title>
<!--Estilos Nexor-->
<link rel="stylesheet" href="style.css" type="text/css" />
<link rel="stylesheet" href="js/table/css/table.css" type="text/css" />
<!--jQueryUI-->
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script> 
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.16/jquery-ui.min.js"></script>
<!--Bootstrap-->
<script src="js/bootstrap/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="js/bootstrap/css/bootstrap.min.css" type="text/css" />
<!--Herramientas-->
<script type="text/javascript" src="js/table/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" language="javascript">
	$().ready(function(e) {
	
  //Acción para regresar al presionar ESC
	$(document).keyup(function(e) {
		var _anchor = $('.form-actions.btn-group .btn-danger');
		if(e.keyCode == 27 && _anchor.size() > 0)
		{
			window.location = _anchor.attr('href');
		}
	});
	
	// Validación de llenado de campos
	$('.required').attr('required', true);
	
	//Números
	$('.dosDecimales').keydown(function(){ ForceNumericInput(this, true, false); });
	//Sin decimales
	$('.cantidad').keydown(function(){ ForceNumericInput(this, false, false); });
});
</script>
</head>
<body>
<h2><?=$titulo?></h2>
<form id="form1" method="post" action="productos_form_actualizar.php" class="marginTop20 form-horizontal blackLabel" enctype="multipart/form-data" style="width: 500px; margin: auto;">
	<fieldset>
		<input type="hidden" name="id" value="<?=$id?>">
		<div class="control-group span12">
			<label for="nombre" class="control-label">Nombre:</label>
			<div class="controls"><input type="text" name="nombre" id="nombre" value="<?=$nombre?>" class="input-xlarge required" /></div>
		</div>
		<div class="control-group">
			<label for="descripcion" class="control-label">Descripción:</label>
      <div class="controls"><textarea name="descripcion" id="descripcion" rows="3" class="input-xlarge required"><?=$descripcion?></textarea></div>
    </div>
		<div class="control-group span12">
			<label for="precio" class="control-label">Precio:</label>
			<div class="controls"><input type="text" name="precio" id="precio" value="<?=$precio?>" class="input-xlarge required" /></div>
		</div>
		<div class="form-actions btn-group span7">
			<a class="btn btn-danger" href="../admin/index.php"><i class="icon-remove icon-white"></i> Cancelar</a>
			<button class="btn btn-primary" type="submit" name="actualizar" ><i class="icon-ok icon-white"></i> Actualizar</button>
		</div>
	</fieldset>
</form>
</body>
</html>

<?php
} else {
	echo '<script languaje="javascript"> alert("No ha iniciado sesion. Por favor inicie sesion.")</script>';
	header("Refresh: 0; url=../index.php");
}
?>
<? ob_flush(); ?>