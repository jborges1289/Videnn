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
  include_once 'videnn/Producto.php';                
?>


<html >
<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
	<link rel="stylesheet" href="./css/style.css" />
    <!-- TemplateEndEditable -->
    <link rel="stylesheet" href="./css/catalogoBotones.css" />
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
                    
                 <h1>Toldos & Estructuras</h1>   
                    
                    
		  <div id="contenido">
                      
                      
                      <!--aaa-->
			  <div id="categorias">
			  	<div id="listaCont">
				  	
			  	</div>
			  	<div id="categoria1" class="productos">
				  	
				     <?php
                                   
                                    $catalogoEstructuras = new gestor_de_catalogo();
                                  echo  $catalogoEstructuras->generar_CatalogoToldos();
                               
                                    
                                    ?>
			  	</div>
			  </div>
		  </div>
		  <!-- TemplateEndEditable -->
		  <div id="footer">
                      $footer = new gestor_de_plantilla();
                    echo $footer->generadorDePie();
                    ?>
                    
                    <?php
                            $copyright = new gestor_de_plantilla();
                         echo   $copyright->generadorCopyright();
                    ?>
		  </div>
		</div>     
</body>
</html>