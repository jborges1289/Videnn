<?php
include_once '../BD/ProductoDAOAdmin.php';
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ServicioProducto
 *
 * @author juAN
 */
class ServicioProductoAdmin {
    //put your code here
    
    
    
    public function actualizarProducto($id_producto, $nombre, $descripcion, $precio, $url) {
        $productoDAOAdmin = new ProductoDAO();
        $exito = $productoDAOAdmin->actualizarProducto($id_producto, $nombre, $descripcion, $precio, $url);
        
        if ($exito) {
            return true;
        } else {
            return false;
        }
    }

    public function eliminarProducto($id_producto) {
        $productoDAOAdmin = new ProductoDAOAdmin();
        
        $producto = $productoDAOAdmin->eliminarProductoAdmin($id_producto);
        
        if ($producto) {
            return true;
        } else {
            return false;
        }
    }

    public function agregarProducto($nombre, $descripcion, $precio, $url) {
        $productoDAOAdmin = new ProductoDAO();        
        if (!$productoDAOAdmin->existeProducto($nombre)) {
            $productoDAOAdmin->insertarProducto($nombre, $descripcion, $precio, $url);
            return true;
        } else {
            return false;
        }
    }

    public function buscarProductoPorNombre($nombre) {
        $productoDAOAdmin = new ProductoDAO();
        return $productoDAOAdmin->seleccionarProductoPorNombre($nombre);
    }

    public function obtenerTodosProductos() {
        $productoDAOAdmin = new ProductoDAO();
        return $productoDAOAdmin->seleccionarTodosProductos("");
    }
    
    
     public function obtenerTodosProductosOrdenId() {
        $productoDAOAdmin = new ProductoDAOAdmin();
        $condicion = "";
        return $productoDAOAdmin->seleccionarTodosProductosOrdenId($condicion);
    }
    
    
    
    public function obtenerTodosProductosBotones() {
        $productoDAOAdmin = new ProductoDAO();
        $tipo = "1";
        $condicion = "WHERE id_tipo_p = '" . $tipo. "'";
//          
        return $productoDAOAdmin->seleccionarTodosProductos($condicion);
    }
    
    public function obtenerTodosProductosEspectaculares() {
        $productoDAOAdmin = new ProductoDAO();
        $tipo = "2";
        $condicion = "WHERE id_tipo_p = '" . $tipo. "'";
        return $productoDAOAdmin->seleccionarTodosProductos($condicion);
    }
    
    
    public function obtenerTodosProductosLonas() {
        $productoDAOAdmin = new ProductoDAO();
        $tipo = "3";
        $condicion = "WHERE id_tipo_p = '" . $tipo. "'";
        return $productoDAOAdmin->seleccionarTodosProductos($condicion);
    }
    
    public function obtenerTodosProductosToldos() {
      $productoDAOAdmin = new ProductoDAO();
        $tipo = "4";
        $condicion = "WHERE id_tipo_p = '" . $tipo. "'";
        return $productoDAOAdmin->seleccionarTodosProductos($condicion);
    }
    
    public function obtenerTodosProductosOffset() {
      $productoDAOAdmin = new ProductoDAO();
        $tipo = "5";
        $condicion = "WHERE id_tipo_p = '" . $tipo. "'";
        return $productoDAOAdmin->seleccionarTodosProductos($condicion);
    }
    
    
}

?>
