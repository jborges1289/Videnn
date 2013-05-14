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
  
       
         function obtenerProductosEspectacularesC(){
            $servicioProducto = new ServicioProducto();
            
            return $servicioProducto->obtenerTodosProductosEspectaculares();
        }
        
        
        
        
          function obtenerProductosLonasC(){
            $servicioProducto = new ServicioProducto();
            
            return $servicioProducto->obtenerTodosProductosLonas();
        }
        
    
        
        
 function obtenerProductosToldosC(){
            $servicioProducto = new ServicioProducto();
            
            return $servicioProducto->obtenerTodosProductosToldos();
        }
        
        
  function obtenerProductosOffsetC(){
            $servicioProducto = new ServicioProducto();
            
            return $servicioProducto->obtenerTodosProductosOffset();
        }
               
        
        
        function obtenerProductosC() {
//        if (isset($_POST["obtener_productos"]) && $_POST["obtener_productos"] == "obtener") {
            $servicioProducto = new ServicioProducto();
            return $servicioProducto->obtenerTodosProductos();
//        }
    }

        function obtenerProductosPorOrdenIdC() {
//        if (isset($_POST["obtener_productos"]) && $_POST["obtener_productos"] == "obtener") {
            $servicioProducto = new ServicioProducto();
            return $servicioProducto->obtenerTodosProductosOrdenId();
//        }
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
   
    
    
    function listarProductos($productos) {
      
        foreach ($productos as $producto) {
            
        
        
            $id2 = "info";
            
            $cadena_post .= ' <div id = "'.$id2.'"> ' .  $SALTO;
            $cadena_post .= '                    <h3> '. $SALTO;
            $cadena_post .= '             <a href="#">'. $SALTO;
            $cadena_post .= '            <strong> '. $producto->getNombre_Producto() .'</strong> '. $SALTO;
            $cadena_post .= '             </a>    '. $SALTO;
            $cadena_post .= '           </h3> '. $SALTO;
            $cadena_post .= '        <p class="vista-subtitulo-articulo"> '.$producto->getDesc_producto().'</p>'. $SALTO;                       
            $cadena_post .= '          <span class="precio-unitario"> '. $SALTO;
            $cadena_post .= '              Precio unitario: '. $SALTO;
            $cadena_post .= '             <strong class="precio"> '. $SALTO;
            $cadena_post .= '              $&nbsp; '. $producto->getPrecio_unitario() .' . '. $SALTO;
            $cadena_post .= '           <sup>00</sup> ' . $SALTO;
            $cadena_post .= '            </strong> ' . $SALTO;
            $cadena_post .= '          </span> '. $SALTO;
            
          
        }
        $cadena_post .= ' </div>  '. $SALTO;
        return $cadena_post;
    }
    

    function catalogoProductosBotones() {
        $productos = $this->obtenerProductosBotonesC();
        $SALTO = "\n";
        $cadena_post = "";
        $index = 1;
        $class ="producto";
        foreach ($productos as $producto) {
         
           
            if ($index % 2 == 0)
                $class = "producto";
                $id = "activado";
                $_id = "imagen";
                $agrupado = "agrupado";
            $cadena_post .='            <div id="' . $agrupado . '" style="float: left; width: 100%; margin-bottom: 50px;" >' . $SALTO;                
            $cadena_post .='            <div id="' . $id . '" class="' . $class . '"  >' . $SALTO;
            $cadena_post .='                <img id="'.$_id.'"   src=" ' . $producto->getUrl() .'" >' . $SALTO;
            $cadena_post .='             </div> ' . $SALTO;
            
            
            $id2 = "info";
            
            $cadena_post .= ' <div id = "'.$id2.'"> ' .  $SALTO;
            $cadena_post .= '                    <h3> '. $SALTO;
            $cadena_post .= '             <a href="#">'. $SALTO;
            $cadena_post .= '            <strong> '. $producto->getNombre_Producto() .'</strong> '. $SALTO;
            $cadena_post .= '             </a>    '. $SALTO;
            $cadena_post .= '           </h3> '. $SALTO;
            $cadena_post .= '        <p class="vista-subtitulo-articulo"> '.$producto->getDesc_producto().'</p>'. $SALTO;                       
            $cadena_post .= '          <span class="precio-unitario"> '. $SALTO;
            $cadena_post .= '              Precio unitario: '. $SALTO;
            $cadena_post .= '             <strong class="precio"> '. $SALTO;
            $cadena_post .= '              $&nbsp; '. $producto->getPrecio_unitario() .' . '. $SALTO;
            $cadena_post .= '           <sup>00</sup> ' . $SALTO;
            $cadena_post .= '            </strong> ' . $SALTO;
            $cadena_post .= '          </span> '. $SALTO;
            $cadena_post .= ' </div>  '. $SALTO;
            $cadena_post .= ' </div>  '. $SALTO;          
            $index++;
        }
        if ($cadena_post == "") {
           $cadena_post .=  '<div id="catalogo_vacio">'    .$SALTO;
            $cadena_post .= '<img id="img_sad" src="img\sad_face.png">  '. $SALTO;
            
            $cadena_post .= ' <div id="catalogo1"> Cat&aacute;logo de Botones/Pines vac&iacute;o </div>' . $SALTO;
          $cadena_post .= '</div>'.$SALTO;
        }
        return $cadena_post;
    }
    
    

function catalogoProductosLonas() {
        $productos = $this->obtenerProductosLonasC();
        
        
        
        $SALTO = "\n";
        $cadena_post = "";
        $index = 1;
        $class ="producto";
        foreach ($productos as $producto) {
         
           
            if ($index % 2 == 0)
                $class = "producto";
                $id = "activado";
                $agrupado = "agrupado";
                $_id = "imagen";
            $cadena_post .='            <div id="' . $agrupado . '" style="float: left; width: 100%; margin-bottom: 50px;" >' . $SALTO;
            $cadena_post .='            <div id="' . $id . '" class="' . $class . '"  >' . $SALTO;
            $cadena_post .='                <img id="'.$_id.'"   src=" ' . $producto->getUrl() .'" >' . $SALTO;
            $cadena_post .='             </div> ' . $SALTO;
            
            
            $id2 = "info";
            
            $cadena_post .= ' <div id = "'.$id2.'"> ' .  $SALTO;
            $cadena_post .= '                    <h3> '. $SALTO;
            $cadena_post .= '             <a href="#">'. $SALTO;
            $cadena_post .= '            <strong> '. $producto->getNombre_Producto() .'</strong> '. $SALTO;
            $cadena_post .= '             </a>    '. $SALTO;
            $cadena_post .= '           </h3> '. $SALTO;
            $cadena_post .= '        <p class="vista-subtitulo-articulo"> '.$producto->getDesc_producto().'</p>'. $SALTO;                       
            $cadena_post .= '          <span class="precio-unitario"> '. $SALTO;
            $cadena_post .= '              Precio unitario: '. $SALTO;
            $cadena_post .= '             <strong class="precio"> '. $SALTO;
            $cadena_post .= '              $&nbsp; '. $producto->getPrecio_unitario() .' . '. $SALTO;
            $cadena_post .= '           <sup>00</sup> ' . $SALTO;
            $cadena_post .= '            </strong> ' . $SALTO;
            $cadena_post .= '          </span> '. $SALTO;
            $cadena_post .= ' </div>  '. $SALTO;
            $cadena_post .= ' </div>  '. $SALTO;          
            $index++;
        }
        if ($cadena_post == "") {
            $cadena_post .=  '<div id="catalogo_vacio">'    .$SALTO;
            $cadena_post .= '<img id="img_sad" src="img\sad_face.png">  '. $SALTO;
            
            $cadena_post .= ' <div id="catalogo1"> Cat&aacute;logo de Lonas vac&iacute;o </div>' . $SALTO;
          $cadena_post .= '</div>'.$SALTO;
        }
        return $cadena_post;
    }

    
    function catalogoProductosEspectaculares() {
        $productos = $this->obtenerProductosEspectacularesC();
        $SALTO = "\n";
        $cadena_post = "";
        $index = 1;
        $class ="producto";
        foreach ($productos as $producto) {
         
           
            if ($index % 2 == 0)
                $class = "producto";
                $id = "activado";
                $_id = "imagen";
                $agrupado = "agrupado";
            $cadena_post .='            <div id="' . $agrupado . '" style="float: left; width: 100%; margin-bottom: 50px;" >' . $SALTO;                
            $cadena_post .='            <div id="' . $id . '" class="' . $class . '"  >' . $SALTO;
            $cadena_post .='                <img id="'.$_id.'"   src=" ' . $producto->getUrl() .'" >' . $SALTO;
            $cadena_post .='             </div> ' . $SALTO;
            
            
            $id2 = "info";
            
            $cadena_post .= ' <div id = "'.$id2.'"> ' .  $SALTO;
            $cadena_post .= '                    <h3> '. $SALTO;
            $cadena_post .= '             <a href="#">'. $SALTO;
            $cadena_post .= '            <strong> '. $producto->getNombre_Producto() .'</strong> '. $SALTO;
            $cadena_post .= '             </a>    '. $SALTO;
            $cadena_post .= '           </h3> '. $SALTO;
            $cadena_post .= '        <p class="vista-subtitulo-articulo"> '.$producto->getDesc_producto().'</p>'. $SALTO;                       
            $cadena_post .= '          <span class="precio-unitario"> '. $SALTO;
            $cadena_post .= '              Precio unitario: '. $SALTO;
            $cadena_post .= '             <strong class="precio"> '. $SALTO;
            $cadena_post .= '              $&nbsp; '. $producto->getPrecio_unitario() .' . '. $SALTO;
            $cadena_post .= '           <sup>00</sup> ' . $SALTO;
            $cadena_post .= '            </strong> ' . $SALTO;
            $cadena_post .= '          </span> '. $SALTO;
            $cadena_post .= ' </div>  '. $SALTO;
            $cadena_post .= ' </div>  '. $SALTO;          
            $index++;
        }
        if ($cadena_post == "") {
           $cadena_post .=  '<div id="catalogo_vacio">'    .$SALTO;
            $cadena_post .= '<img id="img_sad" src="img\sad_face.png">  '. $SALTO;
            
            $cadena_post .= ' <div id="catalogo1"> Cat&aacute;logo de Espectaculares vac&iacute;o </div>' . $SALTO;
          $cadena_post .= '</div>'.$SALTO;
        }
        return $cadena_post;
    }
    
    
    
    
    function catalogoProductosToldos() {
        $productos = $this->obtenerProductosToldosC();
        $SALTO = "\n";
        $cadena_post = "";
        $index = 1;
        $class ="producto";
        foreach ($productos as $producto) {
         
           
            if ($index % 2 == 0)
                $class = "producto";
                $id = "activado";
                $_id = "imagen";
                $agrupado = "agrupado";
            $cadena_post .='            <div id="' . $agrupado . '" style="float: left; width: 100%; margin-bottom: 50px;" >' . $SALTO;                
            $cadena_post .='            <div id="' . $id . '" class="' . $class . '"  >' . $SALTO;
            $cadena_post .='                <img id="'.$_id.'"   src=" ' . $producto->getUrl() .'" >' . $SALTO;
            $cadena_post .='             </div> ' . $SALTO;
            
            
            $id2 = "info";
            
            $cadena_post .= ' <div id = "'.$id2.'"> ' .  $SALTO;
            $cadena_post .= '                    <h3> '. $SALTO;
            $cadena_post .= '             <a href="#">'. $SALTO;
            $cadena_post .= '            <strong> '. $producto->getNombre_Producto() .'</strong> '. $SALTO;
            $cadena_post .= '             </a>    '. $SALTO;
            $cadena_post .= '           </h3> '. $SALTO;
            $cadena_post .= '        <p class="vista-subtitulo-articulo"> '.$producto->getDesc_producto().'</p>'. $SALTO;                       
            $cadena_post .= '          <span class="precio-unitario"> '. $SALTO;
            $cadena_post .= '              Precio unitario: '. $SALTO;
            $cadena_post .= '             <strong class="precio"> '. $SALTO;
            $cadena_post .= '              $&nbsp; '. $producto->getPrecio_unitario() .' . '. $SALTO;
            $cadena_post .= '           <sup>00</sup> ' . $SALTO;
            $cadena_post .= '            </strong> ' . $SALTO;
            $cadena_post .= '          </span> '. $SALTO;
            $cadena_post .= ' </div>  '. $SALTO;
            $cadena_post .= ' </div>  '. $SALTO;          
            $index++;
        }
        if ($cadena_post == "") {
            $cadena_post .=  '<div id="catalogo_vacio">'    .$SALTO;
            $cadena_post .= '<img id="img_sad" src="img\sad_face.png">  '. $SALTO;
            
            $cadena_post .= ' <div id="catalogo1"> Cat&aacute;logo de Toldos/Estructuras vac&iacute;o </div>' . $SALTO;
          $cadena_post .= '</div>'.$SALTO;
        }
        return $cadena_post;
    }
    
    
    function catalogoProductosOffset() {
        $productos = $this->obtenerProductosOffsetC();
        $SALTO = "\n";
        $cadena_post = "";
        $index = 1;
        $class ="producto";
        foreach ($productos as $producto) {
         
           
            if ($index % 2 == 0)
                $class = "producto";
                $id = "activado";
                $_id = "imagen";
                $agrupado = "agrupado";
            $cadena_post .='            <div id="' . $agrupado . '" style="float: left; width: 100%; margin-bottom: 50px;" >' . $SALTO;                
            $cadena_post .='            <div id="' . $id . '" class="' . $class . '"  >' . $SALTO;
            $cadena_post .='                <img id="'.$_id.'"   src=" ' . $producto->getUrl() .'" >' . $SALTO;
            $cadena_post .='             </div> ' . $SALTO;
            
            
            $id2 = "info";
            
            $cadena_post .= ' <div id = "'.$id2.'"> ' .  $SALTO;
            $cadena_post .= '                    <h3> '. $SALTO;
            $cadena_post .= '             <a href="#">'. $SALTO;
            $cadena_post .= '            <strong> '. $producto->getNombre_Producto() .'</strong> '. $SALTO;
            $cadena_post .= '             </a>    '. $SALTO;
            $cadena_post .= '           </h3> '. $SALTO;
            $cadena_post .= '        <p class="vista-subtitulo-articulo"> '.$producto->getDesc_producto().'</p>'. $SALTO;                       
            $cadena_post .= '          <span class="precio-unitario"> '. $SALTO;
            $cadena_post .= '              Precio unitario: '. $SALTO;
            $cadena_post .= '             <strong class="precio"> '. $SALTO;
            $cadena_post .= '              $&nbsp; '. $producto->getPrecio_unitario() .' . '. $SALTO;
            $cadena_post .= '           <sup>00</sup> ' . $SALTO;
            $cadena_post .= '            </strong> ' . $SALTO;
            $cadena_post .= '          </span> '. $SALTO;
            $cadena_post .= ' </div>  '. $SALTO;
            $cadena_post .= ' </div>  '. $SALTO;          
            $index++;
        }
        if ($cadena_post == "") {
           $cadena_post .=  '<div id="catalogo_vacio">'    .$SALTO;
            $cadena_post .= '<img id="img_sad" src="img\sad_face.png">  '. $SALTO;
            
            $cadena_post .= ' <div id="catalogo1"> Cat&aacute;logo de Offset vac&iacute;o </div>' . $SALTO;
          $cadena_post .= '</div>'.$SALTO;
        }
        return $cadena_post;
    }
    
    
    function tablaProductos() {
       $productos = $this->obtenerProductosPorOrdenIdC();
       $SALTO = "\n";
        $cadena_post = "";
        $index = 1;
        foreach ($productos as $producto) {
            $class = "";
            if ($index % 2 == 0)
                $class = "par";
            $cadena_post .='            <tr class="' . $class . '">' . $SALTO;
            $cadena_post .='                <td>' . $producto->getId_producto() . '</td>' . $SALTO;
            $cadena_post .='                <td>' . $producto->getNombre_Producto() . '</td>' . $SALTO;
            $cadena_post .='                <td>' . $producto->getDesc_producto() . '</td>' . $SALTO;
            $cadena_post .='                <td>' . $producto->getPrecio_unitario() . '</td>' . $SALTO;
//            $cadena_post .='                <td>' . $producto->getIdUsuario() . '</td>' . $SALTO;
//            $cadena_post .='                <td>' . $producto->getContrasena() . '</td>' . $SALTO;

            $cadena_post .='               	<td class="borrar"><a onclick = "confirmarEliminacionUsuario(' . $producto->getId_producto() . ')" href="#"><img src="images/borrar.png" alt="Borrar"/></a></td>' . $SALTO;

            $cadena_post .='            </tr>' . $SALTO;
            $index++;
        }
        if ($cadena_post == "") {
            $cadena_post .="<tr><td colspan='4'>No hay productos registrados</td></tr>" . $SALTO;
        }
        return $cadena_post;
    }
    
    
}
$controladorProducto = new ControladorProducto();
echo trim($controladorProducto->agregarProductoC());
    
    


?>
