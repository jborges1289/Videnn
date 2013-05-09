<?php

include_once 'BD/UsuarioDAO.php';

$login = new UsuarioDAO();
$usuario = $_POST['user'];
$contrasenia = $_POST['pass'];

	if (isset($_POST['btn_sesion'])) {
		$login->loginUsuario($usuario, $contrasenia);
	}

		if ($usuarioRegistrado) {
			header("location:admin/index.php");
		}	
?>
laAfectada=  mysql_affected_rows($link);
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
