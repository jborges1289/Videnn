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

    function obtenerProductoC() {
        if (isset($_POST["obtener_producto"]) && $_POST["obtener_producto"] == "obtener") {
            $nombre = $_POST["nombre"];
            $servicioProducto = new ServicioProducto();
            return $servicioProducto->buscarProductoPorNombre($nombre);
        }
        }
    
     
        function obtenerProductosBotonesC(){
            $servicioProducto = new ServicioProducto();
            return $servicioProducto->obtenerTodosProductosBotones();
        }
  

    
    
    function obtenerProductosC() {
        if (isset($_POST["obtener_productos"]) && $_POST["obtener_productos"] == "obtener") {
            $servicioProducto = new ServicioProducto();
            return $servicioProducto->obtenerTodosProductos();
        }
    }

    
    
    
    function eliminarProductoC() {
        if (isset($_POST["eliminar_producto"]) && $_POST["eliminar_producto"] == "eliminar") {
            $nombre = $_POST["id_producto"];
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

    function catalogoProductosBotones() {
        $productos = $this->obtenerProductosBotonesC();
        $SALTO = "\n";
        $cadena_post = "";
        $index = 1;
        foreach ($productos as $producto) {
         
           
            if ($index % 2 == 0)
                $class = "producto";
                $id = "activado";
            $cadena_post .='            <div id="' . $id . '" class="' . $class . '"  >' . $SALTO;
            $cadena_post .='                <img width="350px" height="150px"  src=" ' . $producto->getUrl() .'" >' . $SALTO;
            $cadena_post .='             </div> ' . SALTO;
            
            
            $id2 = "info";
            
            $cadena_post .= ' <div id = "'.$id2.'"> ' .  SALTO;
            $cadena_post .= '                    <h3> '. SALTO;
            $cadena_post .= '             <a href="#">'. SALTO;
            $cadena_post .= '            <strong>Boton variado</strong> '. SALTO;
            $cadena_post .= '             </a>    '. SALTO;
            $cadena_post .= '           </h3> '. SALTO;
            $cadena_post .= '        <p class="vista-subtitulo-articulo"> La imagen que quieras en cuantos botones desees</p>'. SALTO;                       
            $cadena_post .= '          <span class="precio-unitario"> '. SALTO;
            $cadena_post .= '              Precio unitario: '. SALTO;
            $cadena_post .= '             <strong class="precio"> '. SALTO;
            $cadena_post .= '              $&nbsp; .'. $producto->getPrecio_unitario() .' . '. SALTO;
            $cadena_post .= '           <sup>00</sup> ' .SALTO;
            $cadena_post .= '            </strong> ' .SALTO;
            $cadena_post .= '          </span> '. SALTO;
            $cadena_post .= ' </div>  '. SALTO;
          
            $index++;
        }
        if ($cadena_post == "") {
            $cadena_post .= ' <div id="' . $id . '" class="' . $class . '" > No hay botones registrados </div>' . $SALTO;
        }
        return $cadena_post;
    }
    
    



}
$controladorProducto = new ControladorProducto();
echo trim($controladorProducto->agregarProductoC());
    
    


?>
