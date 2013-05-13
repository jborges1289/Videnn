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

    function eliminarUsuarioC() {
        if (isset($_POST["eliminar_profesor"]) && $_POST["eliminar_profesor"] == "eliminar") {
            $id_usuario = $_POST["id_usuario"];
            $servicioUsuario = new ServicioUsuario();
            return $servicioUsuario->eliminarUsuario($id_usuario);
        }
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

//    function tablaUsuarios() {
//        $profesores = $this->obtenerUsuarioesC();
//        $SALTO = "\n";
//        $cadena_post = "";
//        $index = 1;
//        foreach ($profesores as $profesor) {
//            $class = "";
//            if ($index % 2 == 0)
//                $class = "par";
//            $cadena_post .='            <tr class="' . $class . '">' . $SALTO;
//            $cadena_post .='                <td>' . $profesor->getIdUsuario() . '</td>' . $SALTO;
//            $cadena_post .='                <td>' . $profesor->getNombre() . '</td>' . $SALTO;
//            $cadena_post .='                <td>' . $profesor->getApellidoP() . '</td>' . $SALTO;
//            $cadena_post .='                <td>' . $profesor->getApellidoM() . '</td>' . $SALTO;
//            $cadena_post .='                <td>' . $profesor->getIdUsuario() . '</td>' . $SALTO;
//            $cadena_post .='                <td>' . $profesor->getContrasena() . '</td>' . $SALTO;
//
//            $cadena_post .='               	<td class="borrar"><a onclick = "confirmarEliminacionUsuario(' . $profesor->getIdUsuario() . ')" href="#"><img src="img/utileria/borrar.png" alt="Borrar"/></a></td>' . $SALTO;
//
//            $cadena_post .='            </tr>' . $SALTO;
//            $index++;
//        }
//        if ($cadena_post == "") {
//            $cadena_post .="<tr><td colspan='4'>No hay profesores registrados</td></tr>" . $SALTO;
//        }
//        return $cadena_post;
//    }
    
    
}


$controladorUsuario = new ControladorUsuario();
echo trim($controladorUsuario->agregarUsuarioC());
?>
