<? ob_start(); ?>
<?php
session_start();

if(isset($_SESSION['views'])) {
	$_SESSION['views']=$_SESSION['views']+1;	  
?>

?>
<div id="topOptions" class="pull-right">
	<a class="btn btn-small" href="?modulo=productos_form"><i class="icon-plus"></i> Registrar producto</a>
</div>
<h2>Productos</h2>
<table class="table table-bordered table-striped table-condensed font9 dataTable no100">
	<thead>
		<tr>
			<th>Id</th>
			<th>Nombre</th>
                        <th>Descripci&oacute;n</th>
			<th>Precio unitario</th>
                     
<!--                        <th>Tipo</th>-->
                        
                        
                        
		</tr>
                
                  <?php
        include_once '../ControladorProducto.php';  
        $TablaProductos = new ControladorProducto();
      echo  $TablaProductos->tablaProductos();
        
        ?>
        
	</thead>
        
      
</table>
<?php
} else {
	echo "No session Started. Redirecting to index in 3 seconds.";
 	header("Refresh: 3; url=../index.php");
}
?>
<? ob_flush(); ?>