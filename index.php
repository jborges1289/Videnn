<!DOCTYPE html>

 <?php
                  
 include_once './gestor_de_plantilla.php';
                  
?>


<html >
<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
	<link rel="stylesheet" href="./css/style.css" />
    <!-- TemplateEndEditable -->
    <link rel="stylesheet" href="./css/catalogo.css" />
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
                      
                      
                      <!--aaa-->
			  <div id="categorias">
			  	<div id="listaCont">
				  	
			  	</div>
			  	<div id="categoria1" class="productos">
				  	<div  id="activado" class="producto">
				  		<img onclick="javascript:mostrar_ventana('159854','Cacharel','$500','img/Damas/1.png');" width="200px" height="150px" src="img/Damas/1.png">
				  	</div>
				  	<div class="producto">
				  		<img onclick="javascript:mostrar_ventana('1243','Cacharel','$600','img/Damas/2.png');" width="200px" height="150px" src="img/Damas/2.png">
				  	</div>
				  	<div class="producto">
				  		<img onclick="javascript:mostrar_ventana('134536','Cacharel','$700','img/Damas/3.png');" width="200px" height="150px" src="img/Damas/3.png">
				  	</div>
				  	<div class="producto">
				  		<img onclick="javascript:mostrar_ventana('234421','Cacharel','$800','img/Damas/4.png');" width="200px" height="150px" src="img/Damas/4.png">
				  	</div>
				  	<div class="producto">
				  		<img onclick="javascript:mostrar_ventana('63321','Cacharel','$900','img/Damas/5.png');" width="200px" height="150px" src="img/Damas/5.png">
				  	</div>
				  	<div class="producto">
				  		<img onclick="javascript:mostrar_ventana('1231','Cacharel','$580','img/Damas/6.png');" width="200px" height="150px" src="img/Damas/6.png">
				  	</div>
				  	<div class="producto">
				  		<img onclick="javascript:mostrar_ventana('7531','Cacharel','$500','img/Damas/7.png');" width="200px" height="150px" src="img/Damas/7.png">
				  	</div>
				  	<div class="producto">
				  		<img onclick="javascript:mostrar_ventana('82381','Cacharel','$500','img/Damas/8.png');" width="200px" height="150px" src="img/Damas/8.png">
				  	</div>
				  	<div class="producto">
				  		<img onclick="javascript:mostrar_ventana('831','Cacharel','$500','img/Damas/9.png');" width="200px" height="150px" src="img/Damas/9.png">
				  	</div>
			  	</div>
			  </div>
		  </div>
		  <!-- TemplateEndEditable -->
		  <div id="footer">
		  </div>
		</div>     
</body>
</html>