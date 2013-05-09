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
    
    public function generarCatalogoBotones(){
        
        $controladorProducto = new ControladorProducto();
          
        return  $controladorProducto->catalogoProductosBotones();
        }
   
    
    public function generarCatalogoEspectaculares(){
        
             $controladorProducto = new ControladorProducto();
        
        return $controladorProducto->catalogoProductosEspectaculares();
    }
    
    public function generarCatalogoLonas(){
            
        $controladorProducto = new ControladorProducto();
       
         return $controladorProducto->catalogoProductosLonas();
    }
    
        public function generar_CatalogoToldos(){
        
           $controladorProducto = new ControladorProducto();
            
        return $controladorProducto->catalogoProductosToldos();
    }
    
     public function generarCatalogoOffset(){
        
        $controladorProducto = new ControladorProducto();
            
        return $controladorProducto->catalogoProductosOffset();
    }
}


?>
