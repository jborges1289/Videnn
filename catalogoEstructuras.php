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
				  	<div  id="activado" class="producto">
				  		<img onclick="javascript:mostrar_ventana('159854','botones1','$8','img/botones/pines1.jpg');" width="350px" height="150px" src="img/estructuras/estruc1.jpg">

				  	</div>
                                           <?php
                    
                                                $informacionProducto = new gestor_de_catalogo();
                                                echo  $informacionProducto->generar_infoEstructura();

                    
                                           ?>
                                    
				  	<div class="producto">
				  		<img onclick="javascript:mostrar_ventana('1243','Cacharel','$600','img/botones/pines1.jpg');" width="350px" height="150px" src="img/estructuras/estruc2.jpg">
				  	</div>
                                    
                                            <?php
                    
                                                $informacionProducto = new gestor_de_catalogo();
                                                echo  $informacionProducto->generar_infoEstructura();

                    
                                           ?>
				  	<div class="producto">
				  		<img onclick="javascript:mostrar_ventana('134536','Cacharel','$700','img/Damas/3.png');" width="350px" height="150px" src="img/estructuras/estruc3.jpg">
				  	</div>
                                  
                                            <?php
                    
                                                $informacionProducto = new gestor_de_catalogo();
                                                echo  $informacionProducto->generar_infoEstructura();

                    
                                           ?>
                              
                                    
                                            
				  	<div class="producto">
				  		<img onclick="javascript:mostrar_ventana('234421','Cacharel','$800','img/Damas/4.png');" width="350px" height="150px" src="img/estructuras/estruc4.jpg">
                                               
				  	</div>
                                    
                                            <?php
                    
                                                $informacionProducto = new gestor_de_catalogo();
                                                echo  $informacionProducto->generar_infoEstructura();

                    
                                            ?>
				  	<div class="producto">
				  		<img onclick="javascript:mostrar_ventana('63321','Cacharel','$900','img/Damas/5.png');" width="350px" height="150px" src="img/Damas/5.png">
				  	</div>
                                    
                                            <?php
                    
                                                $informacionProducto = new gestor_de_catalogo();
                                                echo  $informacionProducto->generar_infoEstructura();

                    
                                            ?>
				  	
			  	</div>
			  </div>
		  </div>
		  <!-- TemplateEndEditable -->
		  <div id="footer">
		  </div>
		</div>     
</body>
</html>