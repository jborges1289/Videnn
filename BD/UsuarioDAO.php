<?php
 include_once 'BD/ConexionGeneral.php';
 include_once 'videnn/Usuario.php';
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of UsuarioDAO
 *
 * @author juAN
 */
class UsuarioDAO extends ConexionGeneral{
    //put your code here

    
    public function seleccionarUsuarioPorId($id_usuario) {
        $conexion=$this->abrirConexion();        
        $sentencia = "SELECT * FROM usuarios WHERE id_usuario ='" . mysql_real_escape_string($id_usuario) . "'";
        $resultado = $this->ejecutarConsulta($sentencia, $conexion);
        
        $usuario=null;
        while ($fila = mysql_fetch_array($resultado)) {
            $usuario = new Usuario($fila["id_usuario"],$fila["nombre_completo"], $fila["usuario"], $fila["contrasenia"]);
            return $usuario;
        }
        $this->cerrarConexion($conexion);        
        return $usuario;    
    }

    public function insertarUsuario($nombre, $usuario, $contrasenia) {
        $registroExitoso = false;
        $conexion = $this->abrirConexion();
        $sentencia = "INSERT INTO usuarios (nombre_completo, usuario, contrasenia)
            VALUES ('" . $nombre . "', '".$usuario."', '" . $contrasenia . "')";
        //echo $sentencia;
        if ($this->ejecutarConsulta($sentencia, $conexion)) {
            $registroExitoso = true;
        }
        $this->cerrarConexion($conexion);
        return $registroExitoso;
    }

    public function actualizarUsuario($nombre, $usuario, $contrasenia) {
        $conexion = $this->abrirConexion();        
        $sentencia = "UPDATE usuarios SET  nombre_completo ='" . $nombre . "', usuario ='" .$usuario. "', contrasenia = '" . $contrasenia . "'";
        
        $resultado = $this->ejecutarConsulta($sentencia, $conexion);
        $this->cerrarConexion($conexion);
        return $resultado;
    }

    public function seleccionarTodosUsuarios($condicion) {
        $conexion = $this->abrirConexion();        
        $sentencia = "SELECT * FROM usuarios $condicion ORDER BY nombre ASC";
        $resultado_peticion = $this->ejecutarConsulta($sentencia, $conexion);
//        echo $sentencia;
        $indice = 0;
        $usuarios = array();
        while ($fila = mysql_fetch_array($resultado_peticion)) {          
            $usuarios[$indice] = new Usuario($fila['usuarioId'],$fila["contrasenia"], $fila["nombre"], $fila["apellidoP"], $fila["apellidoM"], $fila["matricula"], $fila["tipoUsuario"]);            
            $indice++;
        }
        $this->cerrarConexion($conexion);
        return $usuarios;
    }

    public function eliminarUsuario($id_usuario) {
        $conexion = $this->abrirConexion();
        $usuarioEliminado = false;
        $sentencia = "DELETE FROM usuarios 
            WHERE id_usuario = '" . mysql_real_escape_string($id_usuario) . "'";
//        echo $sentencia;
        $resultado = $this->ejecutarConsulta($sentencia, $conexion);
        if (!$resultado) {
            $cerror = "Ocurrió un error al acceder a la base de datos.<br>";
            $cerror .= "SQL: $sentencia <br>";
            $cerror .= "Descripción: " . mysql_error($conexion);
            die($cerror);
        } else {
            if (mysql_affected_rows($conexion) >= 1)
                $usuarioEliminado = true;
        }
        $this->cerrarConexion($conexion);
        return $usuarioEliminado;
    }

    public function existeUsuario($usuario) {
        $conexion = $this->abrirConexion();
        $existeUsuario = true;
        $sentencia = "SELECT * FROM usuarios WHERE usuario = '" . mysql_real_escape_string($usuario) . "'";
        $resultado = $this->ejecutarConsulta($sentencia, $conexion);
        if (!$resultado) {
            $cerror = "No fue posible recuperar la información de la base de datos.<br>";
            $cerror .= "SQL: $sentencia <br>";
            $cerror .= "Descripción: " . mysql_error($conexion);
            die($cerror);
        } else {
            if (mysql_num_rows($resultado) === 0)
                $existeUsuario = false;
        }        
        return $existeUsuario;
    }
    
    
}

?>
