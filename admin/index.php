<?php
include '/includes/db.php';
include 'includes/funciones.php';

if(!isset($_GET[modulo])){ $_GET[modulo] = 'banners'; }
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>BS Diving - Panel de control</title>
<!--Estilos Nexor-->
<link rel="stylesheet" href="style.css" type="text/css" />
<link rel="stylesheet" href="style3.css" type="text/css" />
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
	
	// Script para fecha
	$('.fecha').attr("readonly",true).datepicker({ dateFormat: 'yy-mm-dd', changeMonth: true, changeYear: true, showAnim: null, duration: '' });
	
	//Números
	$('.dosDecimales').keydown(function(){ ForceNumericInput(this, true, false); });
	//Sin decimales
	$('.cantidad').keydown(function(){ ForceNumericInput(this, false, false); });
});
</script>

</head>
<body>
<div id="notifier"></div>
<div class="container-fluid">
	<div class="row-fluid">
		<div class="span2" id="menuLateral">
			<div class="text-center"><img src="images/logo.png" class="inMenu" /></div>
			<h4 class="menuEncabezado">Elija una opción</h4>
			<ul class="nav  nav-stacked nav-tabs nav-list">
				
				<li <?=active('productos')?>><a href="?modulo=productos"><i class="icon-time"></i> Productos </a></li>
				<li <?=active('usuarios')?>><a href="?modulo=usuarios"><i class="icon-eye-open"></i> Usuarios</a></li>
				<li><a href="cerrar.php"><i class="icon-off"></i> Cerrar sesión</a></li>				
			</ul>
		</div>
		<div class="span10">
			<?php include $_GET[modulo].'.php'; ?> <!-- Código para el funcionamiento ?modulo=nombre_archivo -->
		</div>
	</div>
</div>
</body>
</html>