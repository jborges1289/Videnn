<? ob_start(); ?>
<?php
session_start();

  include_once '../BD/ConexionGeneral.php';
  include_once '../BD/UsuarioDAO.php';  
  include_once '../ControladorUsuario.php';  

if(isset($_SESSION['views'])) {
	$_SESSION['views']=$_SESSION['views']+1;	  
?>

<div id="topOptions" class="pull-right">
	<a class="btn btn-small" href="?modulo=usuarios_form"><i class="icon-plus"></i> Registrar nuevo elemento</a>
</div>
<h2>Usuarios</h2>
<table class="table table-bordered table-striped table-condensed font9 dataTable no100 wrap">
	<thead>
		<tr>
			<th>Id</th>
			<th>Nombre</th>
			<th>Usuario</th>			
			<th>Contrase&ntilde;a</th>
			<th>Gestion</th>			
		</tr>
                <?php
                
                include_once '../ControladorUsuario.php';  
        $TablaUsuarios = new ControladorUsuario();
      echo  $TablaUsuarios->tablaUsuarios();
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