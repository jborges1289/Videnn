<? ob_start(); ?>
<?php
session_start();
include_once 'BD/ConexionGeneral.php';
include_once 'BD/UsuarioDAO.php';

// store session data
$_SESSION['views']=1;

$usuario = $_POST['user'];
$contrasenia = $_POST['pass'];
$log = $_POST['btn_sesion'];

	if (isset($log)) {
		$login = new UsuarioDAO();
		$login->loginUsuario($usuario, $contrasenia);

		if ($login == true) {
			header("location:admin/index.php");
		} else {
			echo "Usuario / Contraseña incorrectos. Redirigiendo en 3 segundos.";
			header("Refresh: 3; url=./index.php");
		}
			
	}
?>
<? ob_flush(); ?>

;
        header("Refresh: 3; url=index.php");        
        echo 'Nombre de usuario / contraseña incorrectos<br><br>';
    }
}

if (isset($_SESSION['registrado']) && $_SESSION['registrado'] == 1) {
    header("location:admin/index.php");
}
?>
