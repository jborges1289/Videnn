<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Usuario
 *
 * @author juAN
 */
class Usuario {

    //put your code here

   
    private $nombre;
    private $usuario;
    private $contrasenia;
   
    public function __construct($nombre, $usuario, $contrasenia) {

        
        $this->nombre = $nombre;
        $this->usuario = $usuario;
        $this->contrasenia = $contrasenia;
        
       
    }
    
    
    /*Getters*/
 
    
    public function getNombre() {

        return $this->nombre;
    }
    
    public function getUsuario(){
        
        return $this->usuario;
    }
    
    
    public function getContrasenia(){
        
        return $this->contrasenia;
    }
    
    
   


    
    /*Setters*/
   

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

   
    public function setUsuario($usuario){
        
        $this->usuario = $usuario;
    }
            
    
    public function setContrasenia($contrasenia){
        
        $this->contrasenia = $contrasenia;
    }
    
 
    

}

?>
