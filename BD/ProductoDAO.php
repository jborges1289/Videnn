<?php
 include_once 'config.inc.php';
 include_once 'ConexionGeneral.php';
 include_once '../videnn/Producto.php';
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ProductoDAO
 *
 * @author juAN
 */
class ProductoDAO extends ConexionGeneral{
    //put your code here

    
     public function seleccionarProductoPorNombre($nombre) {
        $conexion=$this->abrirConexion();        
        $sql = "SELECT * FROM productos WHERE nombre_producto ='" . mysql_real_escape_string($nombre) . "'";
       echo $sql;
        $resultado = $this->ejecutarConsulta($sql, $conexion);
        
        
        $producto=null;
        while ($fila = mysql_fetch_array($resultado)) {
-            $producto = new Producto($fila["id_producto"],$fila["nombre_producto"], $fila["descripcion"], $fila["precio_unitario"], $fila["url_imagen"], $fila["tipo_producto"]);

            return $producto;
        }
        $this->cerrarConexion($conexion);        
        return $producto;
    }
    

public function insertarProducto($nombre, $descripcion, $precio, $url, $tipo) {
        $registroExitoso = false;
        $conexion = $this->abrirConexion();
        $sentencia = "INSERT INTO productos (nombre_producto, descripcion, precio_unitario, url_imagen, id_tipo_p)
            VALUES ('" . $nombre . "', '" . $descripcion . "', '".$precio."', '" . $url . "', '".$tipo."')";
        
        if ($this->ejecutarConsulta($sentencia, $conexion)) {
            $registroExitoso = true;
        }
        $this->cerrarConexion($conexion);
        return $registroExitoso;
    }

    public function actualizarProducto($id_producto, $nombre, $descripcion, $precio, $url) {
        $conexion = $this->abrirConexion();        
        $sentencia = "UPDATE productos SET  nombre_producto ='" . $nombre . "', descripcion ='" .$descripcion. "',
            precio_unitario = '" . $precio. "', url_imagen ='". $url ."' WHERE id_producto = " . $id_producto . "  ";
        
        $resultado = $this->ejecutarConsulta($sentencia, $conexion);
        $this->cerrarConexion($conexion);
        return $resultado;
    }

    public function seleccionarTodosProductos($condicion) {
        $conexion = $this->abrirConexion();        
        $sentencia = "SELECT * FROM productos $condicion ORDER BY nombre_producto ASC ";
        $resultado_peticion = $this->ejecutarConsulta($sentencia, $conexion);


        
        $indice = 0;
        $productos = array();
        
        while ($fila = mysql_fetch_array($resultado_peticion)) { 
           
            
            $productos[$indice] = new Producto($fila["id_producto"],$fila["nombre_producto"], $fila["descripcion"], $fila["precio_unitario"], $fila["url_imagen"], $fila["id_tipo_p"]);
            $indice++;
        }
        $this->cerrarConexion($conexion);
        return $productos;
    }

    public function eliminarProducto($id_producto) {
        $conexion = $this->abrirConexion();
        $productoEliminado = false;
        $sentencia = "DELETE FROM productos 
            WHERE id_producto = '" . mysql_real_escape_string($id_producto) . "'";
//        echo $sentencia;
        $resultado = $this->ejecutarConsulta($sentencia, $conexion);
        if (!$resultado) {
            $cerror = "Ocurrió un error al acceder a la base de datos.<br>";
            $cerror .= "SQL: $sentencia <br>";
            $cerror .= "Descripción: " . mysql_error($conexion);
            die($cerror);
        } else {
            if (mysql_affected_rows($conexion) >= 1)
                $productoEliminado = true;
        }
        $this->cerrarConexion($conexion);
        return $productoEliminado;
    }

    public function existeProducto($nombre) {
        $conexion = $this->abrirConexion();
        $existeProducto = true;
        $sentencia = "SELECT * FROM productos WHERE nombre_producto = '" . mysql_real_escape_string($nombre) . "'";
        $resultado = $this->ejecutarConsulta($sentencia, $conexion);
        if (!$resultado) {
            $cerror = "No fue posible recuperar la información de la base de datos.<br>";
            $cerror .= "SQL: $sentencia <br>";
            $cerror .= "Descripción: " . mysql_error($conexion);
            die($cerror);
        } else {
            if (mysql_num_rows($resultado) === 0)
                $existeProducto = false;
        }        
        return $existeProducto;
    }
    
    public function buscarProducto($texto){
		$conexion = $this->abrirConexion();
		$sql = "SELECT * FROM productos e WHERE e.nombre_producto LIKE '%".$texto."%'";
		$resultado = $this->ejecutarConsulta($sql, $conexion);
		$productos = array();
		$index = 0;
		while($fila = mysql_fetch_array($resultado)) {
			echo mysql_error();
			$producto= new Producto($fila['id_producto'],$fila['nombre_producto'], $fila['descripcion'], $fila['precio_unitario'],$fila['url_imagen'], $fila['id_tipo_p']);
			$producto->setId_producto($fila['id_producto']);
			$productos[$index]=$producto;
			$index++;
		}
		return $productos;
	}
    
       public function seleccionarTodosProductosOrdenId($condicion) {
        $conexion = $this->abrirConexion();        
        $sentencia = "SELECT * FROM productos $condicion ORDER BY id_producto ASC ";
        $resultado_peticion = $this->ejecutarConsulta($sentencia, $conexion);


        
        $indice = 0;
        $productos = array();
        
        while ($fila = mysql_fetch_array($resultado_peticion)) { 
           
            
            $productos[$indice] = new Producto($fila["id_producto"],$fila["nombre_producto"], $fila["descripcion"], $fila["precio_unitario"], $fila["url_imagen"], $fila["id_tipo_p"]);
            $indice++;
        }
        $this->cerrarConexion($conexion);
        return $productos;
    } 
        
    
    
}

?>

