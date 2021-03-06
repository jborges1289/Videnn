<?php
include_once 'Servicios/ServicioProductoAdmin.php';
include_once '../videnn/Producto.php';
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ControladorProducto
 *
 * @author juAN
 */
class ControladorProductoAdmin {
    //put your code 
    
     function agregarProductoC() {
        if (isset($_POST["registrar_producto"]) && $_POST["registrar_producto"] == "registrar") {
           
            $nombre = $_POST["nombre"];
            $descripcion = $_POST["descripcion"];
            $precio = $_POST["precio"];
            $url = $_POST["url"];
            $servicioProductoAdmin = new ServicioProductoAdmin();
            if ($servicioProductoAdmin->agregarProducto($nombre, $descripcion, $precio, $url)) {
                return "TRUE";
            } else {
              
                return "FALSE";
               
            }
        }
    }
    
    

    function obtenerProductoC($id_producto) {
            $servicioProductoAdmin = new ServicioProductoAdmin();
            return $servicioProductoAdmin->buscarProductoPorId($id_producto);
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
            $servicioProducto = new ServicioProductoAdmin();
            return $servicioProducto->obtenerTodosProductosOrdenId();
//        }
    }

    
    
    function eliminarProductoC($id_producto) {
//        if (isset($_POST["eliminar_producto"]) && $_POST["eliminar_producto"] == "eliminar") {
            
            $servicioProducto = new ServicioProductoAdmin();
            return $servicioProducto->eliminarProducto($id_producto);
//        }
    }

    function actualizarProductoC($id, $nombre, $descripcion, $precio) {
            $servicioProductoAdmin = new ServicioProductoAdmin();
            return $servicioProductoAdmin->actualizarProducto($id, $nombre, $descripcion, $precio);
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
          
            $index++;
        }
        if ($cadena_post == "") {
            $cadena_post .= ' <div id="' . $id . '" class="' . $class . '" > Cat&aacute;logo de botones/pines vac&iacute;o </div>' . $SALTO;
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
                $_id = "imagen";
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
          
            $index++;
        }
        if ($cadena_post == "") {
            $cadena_post .= ' <div id="' . $id . '" class="' . $class . '" > Cat&aacute;logo de lonas vac&iacute;o </div>' . $SALTO;
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
          
            $index++;
        }
        if ($cadena_post == "") {
            $cadena_post .= ' <div id="' . $id . '" class="' . $class . '" > Cat&aacute;logo de espectaculares vac&iacute;o </div>' . $SALTO;
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
          
            $index++;
        }
        if ($cadena_post == "") {
            $cadena_post .= ' <div id="' . $id . '" class="' . $class . '" > Cat&aacute;logo de toldos/estructuras vac&iacute;o </div>' . $SALTO;
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
          
            $index++;
        }
        if ($cadena_post == "") {
            $cadena_post .= ' <div id="' . $id . '" class="' . $class . '" > Cat&aacute;logo de offset vac&iacute;o </div>' . $SALTO;
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
            
            $cadena_post .='               	<td class="borrar">

            <form method="post" action="productos_form_actualizar.php">
            	<input type="hidden" name="varname" value="' . $producto->getId_producto() .'">	

            	<button class="btn btn-primary" type="submit" name="editar"><i class="icon-edit icon-white"></i> Editar</button>
            </form>            


            <form method="post" action="eliminadoProducto.php">
            	<input type="hidden" name="varname" value="' . $producto->getId_producto() .'"> 	
            	<button class="btn btn-danger" type="submit" name="borrar"><i class="icon-remove icon-white"></i> Borrar</button>
            </form>
            
            </td>' . $SALTO;           

/*            	<a class="btn btn-primary" href="./?modulo=productos_form_actualizar" name="editar">Editar</a> */           
                        
            $cadena_post .='            </tr>' . $SALTO;
            $index++;
        }
        if ($cadena_post == "") {
            $cadena_post .="<tr><td colspan='4'>No hay productos registrados</td></tr>" . $SALTO;
        }
        return $cadena_post;
    }
    
    
}
$controladorProducto = new ControladorProductoAdmin();
echo trim($controladorProducto->agregarProductoC());


?>
