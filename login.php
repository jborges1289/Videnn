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
		$Admon = $login->loginUsuario($usuario, $contrasenia);

              
                
                
		if ($Admon) {
			header("location:admin/index.php");
		} else {
			echo '<script languaje="javascript"> alert("Usuario y/o Contrase\u00f1a incorrectos. Redirigiendo en 2 segundos")</script>';
			header("Refresh: 2; url=./index.php");
		}
			
	}
?>

<? ob_flush(); ?>

<!--;
        header("Refresh: 3; url=index.php");        
        echo 'Nombre de usuario / contrase�a incorrectos<br><br>';
    }
}
Cuando el usuario es invalido sale esto de if() porque?
if (isset($_SESSION['registrado']) && $_SESSION['registrado'] == 1) {
    header("location:admin/index.php");
}
?>-->

