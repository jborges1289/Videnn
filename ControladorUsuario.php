<?php
include_once 'Servicios/ServicioUsuario.php';

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ControladorUsuario
 *
 * @author juAN
 */
class ControladorUsuario {
    //put your code here
    
    
    function agregarUsuarioC() {
        if (isset($_POST["registrar_usuario"]) && $_POST["registrar_usuario"] == "registrar") {
           
            $nombre = $_POST["nombre"];
            $usuario = $_POST["usuario"];
            $contrasenia = $_POST["contrasenia"];
            $servicioUsuario = new ServicioUsuario();
            if ($servicioUsuario->agregarUsuario($nombre, $usuario, $contrasenia)) {
                return "TRUE";
            } else {
              
                return "FALSE";
               
            }
        }
    }

    function obtenerUsuarioC() {
        if (isset($_SESSION["user"])) {
            $usuario = $_SESSION["user"];
            $servicioUsuario = new ServicioUsuario();
            return $servicioUsuario->buscarUsuarioPorNombreUsuario($usuario);
        }
    }

    function obtenerUsuariosC() {
        if (isset($_POST["obtener_usuarios"]) && $_POST["obtener_usuario"] == "obtener") {
            $servicioUsuario = new ServicioUsuario();
            return $servicioUsuario->obtenerTodosUsuarios();
        }
    }

    function eliminarUsuarioC($id_usuario) {
            $servicioUsuario = new ServicioUsuario();
            return $servicioUsuario->eliminarUsuario($id_usuario);
    }

    function actualizarUsuarioC() {
        if (isset($_POST["actualizar_usuario"]) && $_POST["actualizar_usuario"] == "actualizar") {
            $nombre = $_POST["nombre"];
            $usuario = $_POST["usuario"];        
            $contrasenia = $_POST["contrasenia"];
   
            $servicioUsuario = new ServicioUsuario();
            if ($servicioUsuario->actualizarUsuario($nombre, $usuario, $contrasenia)) {
                $msj = "<div class='exito'>Se completo correctamente la actualizacion :)</div>";
            } else {
                $msj = "<div class='error'>Error al intentar actualizar :(</div>";
            }
            return $msj;
        }
    }

//    function eliminarUsuarioC() {
//        if (isset($_POST["eliminar_usuario"]) && $_POST["eliminar_usuario"] == "eliminar") {
//            $usuario = $_POST["usuario"];
//            $servicioUsuario = new ServicioUsuario();
//            $servicioUsuario->eliminarUsuario($usuario);
//            include_once '../config.inc.php';
//            session_start();
//            $_SESSION['login'] = false;
//            session_destroy();
//            header("Location: " . $GLOBALS['raiz_sitio']);
//        }
//    }
    
     function obtenerUsuariosPorOrdenIdC() {
//        if (isset($_POST["obtener_productos"]) && $_POST["obtener_productos"] == "obtener") {
            $servicioUsuario = new ServicioUsuario();
            return $servicioUsuario->obtenerTodosUsuariosOrdenId();
//        }
    }
    
    

function tablaUsuarios() {
       $usuarios= $this->obtenerUsuariosPorOrdenIdC();
              $SALTO = "\n";

        $cadena_post = "";
        $index = 1;
        foreach ($usuarios as $usuario) {
            $class = "";
            if ($index % 2 == 0)
                $class = "par";
            $cadena_post .='            <tr class="' . $class . '">' . $SALTO;
            $cadena_post .='                <td>' . $usuario->getId_Usuario() . '</td>' . $SALTO;
            $cadena_post .='                <td>' . $usuario->getNombre() . '</td>' . $SALTO;
            $cadena_post .='                <td>' . $usuario->getUsuario() . '</td>' . $SALTO;
            $cadena_post .='                <td>' . $usuario->getContrasenia() . '</td>' . $SALTO;
//            $cadena_post .='                <td>' . $usuario->getIdUsuario() . '</td>' . $SALTO;
//            $cadena_post .='                <td>' . $usuario->getContrasena() . '</td>' . $SALTO;

            $cadena_post .='               	<td class="borrar">
            
            <form method="post" action="eliminadoUsuario.php">
            	<input type="hidden" name="varname" value="' . $usuario->getId_Usuario() .'"> 	
            	<button class="btn btn-danger" type="submit" name="borrar"><i class="icon-remove icon-white"></i> Borrar</button>
            </form>
            </td>' . $SALTO;           


            $cadena_post .='            </tr>' . $SALTO;
            $index++;
        }
        if ($cadena_post == "") {
            $cadena_post .="<tr><td colspan='4'>No hay usuarios registrados</td></tr>" . $SALTO;
        }
        return $cadena_post;
    }
    
    
}


$controladorUsuario = new ControladorUsuario();
echo trim($controladorUsuario->agregarUsuarioC());
?>
