<?php

function getConeccion($bdName){
    $enlace=mysql_connect('localhost', 'root', '');
    if(!$enlace){
        echo 'la base de datos no se encuentra disponible';
        exit();
    }
    if(!mysql_select_db($bdName, $enlace)){
         echo 'error al conectarse a la base de datos '.$bdName;
        exit();
    }
    return $enlace;
}
?>
