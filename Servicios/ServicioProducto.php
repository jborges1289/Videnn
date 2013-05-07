<?php
include_once 'BD/ProductoDAO.php';
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
    
    
    
    public function actualizarProducto($nombre, $descripcion, $precio, $url) {
        $productoDAO = new ProductoDAO();
        $exito = $productoDAO->actualizarProducto($nombre, $descripcion, $precio, $url);
        
        if ($exito) {
            return true;
        } else {
            return false;
        }
    }

    public function eliminarProducto($nombre) {
        $productoDAO = new ProductoDAO();
        
        
        if ($productoDAO->eliminarProducto($nombre)) {
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
    
    
}

?>
