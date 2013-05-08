<?php
include_once 'ControladorProducto.php';

/* 
    Document   : catalogoBotones
    Created on : 25-abr-2013, 12:39:16
    Author     : giselly_2003
    Description:
        Purpose of the stylesheet follows.
*/


class gestor_de_catalogo{
    public function generar_infoProducto(){
        
        $controladorProducto = new ControladorProducto();
       
        
        return  $controladorProducto->obtenerProductosBotonesC();
        
        }
   
    
    public function generar_infoEspectaculares(){
        
        return '<div id = "info"> 
        <h3>
            <a href="#">
            <strong>Publicidad Móvil</strong> 
            </a>    
        </h3>
        <p class="vista-subtitulo-articulo"> Una opción con muchos resultados</p>
        
        <span class="precio-unitario">
           Precio unitario:
            <strong class="precio">
                 $&nbsp;200
                <sup>00</sup>
            </strong>
            
        </span>
       </div>
         ';
    }
    
    public function generar_infoLonas(){
        
        return '<div id = "info"> 
        <h3>
            <a href="#">
            <strong>Lonas para tus Celebraciones</strong> 
            </a>    
        </h3>
        <p class="vista-subtitulo-articulo"> Una opción para inmortalizar esos momentos</p>
        
        <span class="precio-unitario">
           Precio unitario:
            <strong class="precio">
                 $&nbsp;200
                <sup>00</sup>
            </strong>
            
        </span>
       </div>
         ';
    }
    
        public function generar_infoEstructura(){
        
        return '<div id = "info"> 
        <h3>
            <a href="#">
            <strong>Estructas para lonas</strong> 
            </a>    
        </h3>
        <p class="vista-subtitulo-articulo"> Arma el modelo de estructura que desees para tu toldo</p>
        
        <span class="precio-unitario">
           Precio unitario:
            <strong class="precio">
                 $&nbsp;200
                <sup>00</sup>
            </strong>
            
        </span>
       </div>
         ';
    }
    
     public function generar_infoOffset(){
        
        return '<div id = "info"> 
        <h3>
            <a href="#">
            <strong>Volantes</strong> 
            </a>    
        </h3>
        <p class="vista-subtitulo-articulo">Date a conocer, realiza tus volantes con nosotros</p>
        
        <span class="precio-unitario">
           Precio unitario:
            <strong class="precio">
                 $&nbsp;200
                <sup>00</sup>
            </strong>
            
        </span>
       </div>
         ';
    }
}


?>
