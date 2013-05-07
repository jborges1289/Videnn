<?php
include_once 'Servicios/ServicioProducto.php';
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ControladorProducto
 *
 * @author juAN
 */
class ControladorProducto {
    //put your code 
    
     function agregarProductoC() {
        if (isset($_POST["registrar_producto"]) && $_POST["registrar_producto"] == "registrar") {
           
            $nombre = $_POST["nombre"];
            $descripcion = $_POST["descripcion"];
            $precio = $_POST["precio"];
            $url = $_POST["url"];
            $servicioProducto = new ServicioProducto();
            if ($servicioProducto->agregarProducto($nombre, $descripcion, $precio, $url)) {
                return "TRUE";
            } else {
              
                return "FALSE";
               
            }
        }
    }

    function obtenerProductoC($nombre) {
        
            $servicioProducto = new ServicioProducto();
            return $servicioProducto->buscarProductoPorNombre($nombre);
            
        }
    

    function obtenerProductosC() {
        if (isset($_POST["obtener_productos"]) && $_POST["obtener_producto"] == "obtener") {
            $servicioProducto = new ServicioProducto();
            return $servicioProducto->obtenerTodosProductos();
        }
    }

    function eliminarProductoC($nombre) {
        if (isset($_POST["eliminar_producto"]) && $_POST["eliminar_producto"] == "eliminar") {
          
            $servicioProducto = new ServicioProducto();
            return $servicioProducto->eliminarProducto($nombre);
        }
    }

    function actualizarProductoC() {
        if (isset($_POST["actualizar_usuario"]) && $_POST["actualizar_usuario"] == "actualizar") {
            $nombre = $_POST["nombre"];
            $descripcion = $_POST["descripcion"];
            $precio = $_POST["precio"];
            $url = $_POST["url"];
            $servicioProducto = new ServicioProducto();
            if ($servicioProducto->actualizarProducto($nombre, $descripcion, $precio, $url)) {
                $msj = "<div class='exito'>Se completo correctamente la actualizacion :)</div>";
            } else {
                $msj = "<div class='error'>Error al intentar actualizar :(</div>";
            }
            return $msj;
        }
    }

//    function eliminarProductoC() {
//        if (isset($_POST["eliminar_usuario"]) && $_POST["eliminar_usuario"] == "eliminar") {
//            $usuario = $_POST["usuario"];
//            $servicioProducto = new ServicioProducto();
//            $servicioProducto->eliminarProducto($usuario);
//            include_once '../config.inc.php';
//            session_start();
//            $_SESSION['login'] = false;
//            session_destroy();
//            header("Location: " . $GLOBALS['raiz_sitio']);
//        }
//    }

//    function tablaProductos() {
//        $profesores = $this->obtenerProductoesC();
//        $SALTO = "\n";
//        $cadena_post = "";
//        $index = 1;
//        foreach ($profesores as $profesor) {
//            $class = "";
//            if ($index % 2 == 0)
//                $class = "par";
//            $cadena_post .='            <tr class="' . $class . '">' . $SALTO;
//            $cadena_post .='                <td>' . $profesor->getIdProducto() . '</td>' . $SALTO;
//            $cadena_post .='                <td>' . $profesor->getNombre() . '</td>' . $SALTO;
//            $cadena_post .='                <td>' . $profesor->getApellidoP() . '</td>' . $SALTO;
//            $cadena_post .='                <td>' . $profesor->getApellidoM() . '</td>' . $SALTO;
//            $cadena_post .='                <td>' . $profesor->getIdProducto() . '</td>' . $SALTO;
//            $cadena_post .='                <td>' . $profesor->getContrasena() . '</td>' . $SALTO;
//
//            $cadena_post .='               	<td class="borrar"><a onclick = "confirmarEliminacionProducto(' . $profesor->getIdProducto() . ')" href="#"><img src="img/utileria/borrar.png" alt="Borrar"/></a></td>' . $SALTO;
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
$controladorProducto = new ControladorProducto();
echo trim($controladorProducto->agregarProductoC());
    
    


?>
