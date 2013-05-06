<!DOCTYPE html>

 <?php
          
 include_once '/BD/ConexionGeneral.php';
 include_once '/BD/config.inc.php';
 include_once './gestor_de_plantilla.php';
 include_once '/ControladorUsuario.php';                 
 
?>


<html >
<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
	<link rel="stylesheet" href="./css/style.css" />
    <!-- TemplateEndEditable -->
    <link rel="stylesheet" href="./css/catalogo.css" />
    
     <link rel="stylesheet" href="./css/registro.css" />
    
    <script language="JavaScript" src="./js/mostrarProducto.js"></script>
     <link rel="shortcut icon" href="img/icono_vidden.jpg"/>
    <!-- TemplateBeginEditable name="linksExternos" -->
	<title>.: Videnn :.</title>
</head>
<body >
		<div id="contenedor">
		  
                    
                    <?php
                    
 $encabezado = new gestor_de_plantilla();
 echo  $encabezado->generarEncabezado();

                    
                    ?>
                    
                    
		  <div id="contenido">
		 <?php	
                       $registro = new gestor_de_plantilla();
 echo  $registro->generarRegistro();
                      ?>
		  </div>
		  <!-- TemplateEndEditable -->
		  <div id="footer">
		  </div>
		</div>     
</body>
</html>