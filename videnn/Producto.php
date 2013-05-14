<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Producto
 *
 * @author juAN
 */
class Producto {
    //put your code here

    private $id_producto;
    private $nombre_producto;
    private $desc_producto;
    private $precio_unitario;
    private $url;
    private $tipo;
            
    public function __construct($id_producto, $nombre_producto,$desc_producto, $precio_unitario, $url, $tipo) {

        $this->id_producto = $id_producto;
        $this->nombre_producto = $nombre_producto;
        $this->descripcion =$desc_producto;
        $this->precio_unitario = $precio_unitario;
        $this->url_imagen = $url;
        $this->id_tipo_p = $tipo;
        
}
    
   public function getId_producto(){
       
       return $this->id_producto;
   }    
   
   public function getNombre_Producto(){
       
       return $this->nombre_producto;
   }
   

 public function getDesc_producto(){
     
     return $this->descripcion;
 }
    
 public function getPrecio_unitario(){
     
     return $this->precio_unitario;
 }
 
 public function getUrl(){
     
     return $this->url_imagen;
 }

 
 public function getTipo(){
     
     return $this->id_tipo_p;
 }
 
 
 
 
public function setId_producto($id_producto){
    
    $this->id_producto = $id_producto;   
}


public function setNombre_Producto($nombre_producto){
    
    $this->nombre_producto = $nombre_producto;
}

 public function setDesc_producto($desc_producto){
     
     $this->descripcion = $desc_producto;
     
 }
 
 
 public function setPrecio_unitario($precio_unitario){
    
     $this->precio_unitario = $precio_unitario;
 }
 
 
 public function setUrl($url){
     
     $this->url_imagen = $url;
 }
 
 public function setTipo($tipo){
     $this->id_tipo_p = $tipo;
 }
 
}

?>
