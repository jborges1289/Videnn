<?php

 include_once 'conexionBd.php';
$link=  getConeccion('bd_videnn');
if (isset($_POST['btn_sesion'])) {
    // se buscara en la base de datos
    $sql="select * from usuarios where usuario='".$_POST['user']."' and contrasenia='".$_POST['pass']."'";
    $result=mysql_query($sql, $link);
    $filaAfectada=  mysql_affected_rows($link);
    if ($filaAfectada==1) { //si se encuentra     
        $_SESSION['registrado'] = 1;
        $txtc=mysql_fetch_row($result);
        $_SESSION['user']=$txtc[0];
    } else {   // si no se encuentra
        $_SESSION['registrado'] = 0;
        header("Refresh: 3; url=index.php");        
        echo 'Nombre de usuario / contraseña incorrectos<br><br>';
    }
}

if (isset($_SESSION['registrado']) && $_SESSION['registrado'] == 1) {
    header("location:admin/index.php");
}
?>
