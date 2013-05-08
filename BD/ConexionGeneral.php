<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ConexionGeneral
 *
 * @author juAN
 */


include_once 'config.inc.php';

class ConexionGeneral {
    
    public function abrirConexion() {        
        $conexion = @mysql_connect($GLOBALS["servidor"], $GLOBALS["usuarioDB"], $GLOBALS["contrasenaDB"]) or
                die('<div class="error" style="font-family:Arial, Helvetica, sans-serif;font-size:20px;">Intente acceder en otro momento ERROR: " ' . mysql_error()) . '"</div>';
        $this->selecionarBD($conexion);
        return $conexion;
    }

    private function selecionarBD($conexion) {
        return @mysql_select_db($GLOBALS["base_datos"], $conexion);
    }

    public function ejecutarConsulta($sentencia, $conexion) {

        return mysql_query($sentencia, $conexion) or die(mysql_error()) ;
    }

    public function cerrarConexion($conexion) {
        return @mysql_close($conexion);
    }

}


?>
