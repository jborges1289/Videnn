<?php

include_once '../BD/UsuarioDAO.php';

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */


$correo="jborges@gmail.com";
//$nombre="juan"; 
//$apellido="borges cen";
//$contrasenia="12345"; 
//$fecha_n="2013-04-23";
//$sexo="masculino";
//$telefono=9993388727;
//$tipo=0;


$usuario = new UsuarioDAO();

//$usuario->insertarUsuario($correo, $nombre, $apellido, $contrasenia, $fecha_n, $sexo, $telefono, $tipo)
//$usuario->actualizarUsuario($correo, $nombre, $apellido, $contrasenia, $fecha_n, $sexo, $telefono, $tipo)
$usuario->eliminarUsuario($correo);

?>
