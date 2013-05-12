<?php
include_once './AdministradorProductos.php';
include_once './videnn/Producto.php';
include './BD/config.inc.php';
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class ListarProducto{
    public function listarProductos($productos){
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
}
?>
