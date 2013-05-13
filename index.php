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
        <link rel="stylesheet" href="./css/styleSlider.css" />
    <script language="JavaScript" src="./js/mostrarProducto.js"></script>
    <script type="text/javascript" src="./js/jquery-1.3.2.min.js" ></script>
<script type="text/javascript" src="./js/jquery-ui-1.7.2.custom.min.js" ></script>
    <script language="JavaScript" src="./js/indexSlider.js"></script>
     <link rel="shortcut icon" href="img/icono_vidden.jpg"/>
    <!-- TemplateBeginEditable name="linksExternos" -->
	<title>.: Videnn :.</title>
        <style type="text/css" >
	#featured .ui-tabs-panel .info{
		display:none;
	}
</style>
</head>
<body >
		<div id="contenedor">
		  
                    
                    <?php
                    
 $encabezado = new gestor_de_plantilla();
 echo  $encabezado->generarEncabezado();

                    
                    ?>

                    <html>     
                        <body>


		
		<div id="featured" >
		  <ul class="ui-tabs-nav">
	        <li class="ui-tabs-nav-item ui-tabs-selected" id="nav-fragment-1"><a href="#fragment-1"><img src="img/botones/pines1.jpg" alt="" /><span>Botones para esas ocaciones especiales</span></a></li>
	        <li class="ui-tabs-nav-item" id="nav-fragment-2"><a href="#fragment-2"><img src="img/espectaculares/espec1.jpg" alt="" /><span>Espectaculares para darte a conocer</span></a></li>
	        <li class="ui-tabs-nav-item" id="nav-fragment-3"><a href="#fragment-3"><img src="img/lonas/lona1.jpg" alt="" /><span>Los mejores diseños para las lonas que desees</span></a></li>
	        <li class="ui-tabs-nav-item" id="nav-fragment-4"><a href="#fragment-4"><img src="img/offset/offset1.jpg" alt="" /><span>Expande tu negocio con volantes u otros medios</span></a></li>
	      </ul>

	    <!-- First Content -->
	    <div id="fragment-1" class="ui-tabs-panel" style="">
			<img src="img/botones/pines1.jpg" alt="" />
			 <div class="info" >
				<a class="hideshow" href="#" >Ocultar</a>
				<h2><a href="#" >Botones para esas ocaciones especiales</a></h2>
				<p>Pide tus pines para esas ocaciones epeciales, para cumpleaños, xv años y mas.....</p>
			 </div>
	    </div>

	    <!-- Second Content -->
	    <div id="fragment-2" class="ui-tabs-panel ui-tabs-hide" style="">
			<img src="img/espectaculares/espec1.jpg" alt="" />
			 <div class="info" >
				<a class="hideshow" href="#" >Ocultar</a>
				<h2><a href="#" >Espectaculares para darte a conocer</a></h2>
				<p>Espectaculares para darte a conocer por todo Merida</p>
			 </div>
	    </div>

	    <!-- Third Content -->
	    <div id="fragment-3" class="ui-tabs-panel ui-tabs-hide" style="">
			<img src="img/lonas/lona1.jpg" alt="" />
			 <div class="info" >
				<a class="hideshow" href="#" >Ocultar</a>
				<h2><a href="#" >Los mejores diseños para las lonas que desees</a></h2>
				<p> Lonas para ocaciones especiales</p>
	         </div>
	    </div>

	    <!-- Fourth Content -->
	    <div id="fragment-4" class="ui-tabs-panel ui-tabs-hide" style="">
			<img src="img/offset/offset1.jpg" alt="" />
			 <div class="info" >
				<a class="hideshow" href="#" >Ocultar</a>
				<h2><a href="#" >Expande tu negocio con volantes u otros medios</a></h2>
				<p>¿Quieres dar a conocer tu negocio?, crea con nsotros tus offset para darle propaganda a tu negocio</p>
	         </div>
	    </div>

		</div>
                                 
                            
                      <?php
                      
                      
                            $copyright = new gestor_de_plantilla();
                         echo   $copyright->generadorCopyright();
                      
                        
                      
                         ?>   
                            
                            
                </div>


</body>
</html>