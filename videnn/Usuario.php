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

    private $correo;
    private $nombre;
    private $apellido;
    private $contrasenia;
    private $fecha_n;
    private $sexo;
    private $telefono;
    private $tipo;

    public function __construct($correo, $nombre, $apellido, $contrasenia, $fecha_n, $sexo, $telefono, $tipo) {

        $this->correo = $correo;
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->contrasenia = $contrasenia;
        $this->fecha_n = $fecha_n;
        $this->sexo = $sexo;
        $this->telefono = $telefono;
        $this->tipo = $tipo;
    }

    
    
    /*Getters*/
    
    public function getCorreo() {

        return $this->correo;
    }

    public function getNombre() {

        return $this->nombre;
    }

    public function getApellido() {

        return $this->apellido;
    }

    
    public function getContrasenia(){
        
        return $this->contrasenia;
    }
    
    
    public function getFecha_n() {

        return $this->fecha_n;
    }

    public function getSexo() {

        return $this->sexo;
    }

    public function getTelefono() {

        return $this->telefono;
    }

    public function getTipo() {

        return $this->tipo;
    }

    
    
    
    /*Setters*/
    public function setCorreo($correo) {
        $this->correo = $correo;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function setApellido($apellido) {
        $this->apellido = $apellido;
    }

    
    public function setContrasenia($contrasenia){
        
        $this->contrasenia = $contrasenia;
    }
    
    
    public function setFecha_n($fecha_n) {

        $this->fecha_n = $fecha_n;
    }

    public function setSexo($sexo) {

        $this->sexo = $sexo;
    }

    public function setTelefono($telefono) {

        $this->telefono = $telefono;
    }

    public function setTipo($tipo) {
        $this->tipo = $tipo;
    }

}

?>
