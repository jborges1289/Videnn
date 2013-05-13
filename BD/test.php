<?php

include_once 'UsuarioDAO.php';





/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */



//$nombre="juan"; 
//$apellido="borges cen";
//$contrasenia="12345"; 
//$fecha_n="2013-04-23";
//$sexo="masculino";
//$telefono=9993388727;
////$tipo=0;
//
//
//$nombre = "boton1";
//$descripcion = "algo";
//$precio = "70";
//$url = "////";
//$tipo = "2";

$producto = new UsuarioDAO();
//$producto->insertarUsuario($correo, $nombre, $apellido, $contrasenia, $fecha_n, $sexo, $telefono, $tipo)
//$producto->actualizarUsuario($correo, $nombre, $apellido, $contrasenia, $fecha_n, $sexo, $telefono, $tipo)
//$producto->seleccionarProductoPorNombre("Botones");
$usuario = "jborges1289";   
$contrasenia = "jb528";        
$producto->loginUsuario($usuario, $contrasenia);
