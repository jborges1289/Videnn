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
class ServicioProducto {
    //put your code here
    
    
    
    public function actualizarProducto($id_producto, $nombre, $descripcion, $precio, $url) {
        $productoDAO = new ProductoDAO();
        $exito = $productoDAO->actualizarProducto($id_producto, $nombre, $descripcion, $precio, $url);
        
        if ($exito) {
            return true;
        } else {
            return false;
        }
    }

    public function eliminarProducto($id_producto) {
        $productoDAO = new ProductoDAO();
        
        
        if ($productoDAO->eliminarProducto($id_producto)) {
            return true;
        } else {
            return false;
        }
    }

    public function agregarProducto($nombre, $descripcion, $precio, $url) {
        $productoDAO = new ProductoDAO();        
        if (!$productoDAO->existeProducto($nombre)) {
            $productoDAO->insertarProducto($nombre, $descripcion, $precio, $url);
            return true;
        } else {
            return false;
        }
    }

    public function buscarProductoPorNombre($nombre) {
        $productoDAO = new ProductoDAO();
        return $productoDAO->seleccionarProductoPorNombre($nombre);
    }

    public function obtenerTodosProductos() {
        $productoDAO = new ProductoDAO();
        return $productoDAO->seleccionarTodosProductos("");
    }
    
    
     public function obtenerTodosProductosOrdenId() {
        $productoDAO = new ProductoDAO();
        $condicion = "";
        return $productoDAO->seleccionarTodosProductosOrdenId($condicion);
    }
    
    
    
    public function obtenerTodosProductosBotones() {
        $productoDAO = new ProductoDAO();
        $tipo = "1";
        $condicion = "WHERE id_tipo_p = '" . $tipo. "'";
//          
        return $productoDAO->seleccionarTodosProductos($condicion);
    }
    
    public function obtenerTodosProductosEspectaculares() {
        $productoDAO = new ProductoDAO();
        $tipo = "2";
        $condicion = "WHERE id_tipo_p = '" . $tipo. "'";
        return $productoDAO->seleccionarTodosProductos($condicion);
    }
    
    
    public function obtenerTodosProductosLonas() {
        $productoDAO = new ProductoDAO();
        $tipo = "3";
        $condicion = "WHERE id_tipo_p = '" . $tipo. "'";
        return $productoDAO->seleccionarTodosProductos($condicion);
    }
    
    public function obtenerTodosProductosToldos() {
      $productoDAO = new ProductoDAO();
        $tipo = "4";
        $condicion = "WHERE id_tipo_p = '" . $tipo. "'";
        return $productoDAO->seleccionarTodosProductos($condicion);
    }
    
    public function obtenerTodosProductosOffset() {
      $productoDAO = new ProductoDAO();
        $tipo = "5";
        $condicion = "WHERE id_tipo_p = '" . $tipo. "'";
        return $productoDAO->seleccionarTodosProductos($condicion);
    }
    
    
}

?>
