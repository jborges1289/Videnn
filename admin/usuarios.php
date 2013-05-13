<?php
  include_once '../BD/ConexionGeneral.php';
  include_once '../BD/UsuarioDAO.php';  
  include_once '../ControladorUsuario.php';  
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
		</tr>
	</thead>
<?php
$usuarioDAO = new UsuarioDAO();
$usuarioDAO -> seleccionarTodosUsuarios("");
foreach ($usuarioDAO as $usuario) {
	print $usuario;	
	echo $usuario;
}
?>
</table>