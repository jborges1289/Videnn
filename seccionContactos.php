<!DOCTYPE html>
<!--/* 
    Document   : catalogoBotones
    Created on : 25-abr-2013, 12:39:16
    Author     : giselly_2003
    Description:
        Purpose of the stylesheet follows.
*/-->

 <?php
                  
 include_once './gestor_de_plantilla.php';
  include_once './gestor_de_catalogo.php';
   include_once './gestor_de_plantillaNosotrosContacto.php';
                  
?>


<html >
<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
	<link rel="stylesheet" href="./css/style.css" />
    <!-- TemplateEndEditable -->
    <link rel="stylesheet" href="./css/catalogoBotones.css" />
    <link rel="stylesheet" href="./css/nosotros.css" />
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
        
		</div> 
    
    <div id="logoNosotros">
        <?php
       $encabezadoNosotros = new gestor_de_plantillaNosotros();
       echo $encabezadoNosotros->generarInfoContacto();
        _?>
    </div>
</body>
</html>