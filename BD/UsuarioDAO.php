<?php
 include_once '../BD/ConexionGeneral.php';
 include_once '../videnn/Usuario.php';
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

    
    public function seleccionarUsuarioPorId($id_matricula) {
        $conexion=$this->abrirConexion();        
        $sentencia = "SELECT * FROM usuarios WHERE id_usuario ='" . mysql_real_escape_string($id_matricula) . "'";
        $resultado = $this->ejecutarConsulta($sentencia, $conexion);
        $usuario=null;
        while ($fila = mysql_fetch_array($resultado)) {
            $usuario = new Usuario($fila["id_usuario"],$fila["nombre"], $fila["apellido"], $fila["contrasenia"], $fila["fecha_n"], $fila["sexo"], $fila["telefono"], $fila["tipo"]);
            return $usuario;
        }
        $this->cerrarConexion($conexion);        
        return $usuario;
    }

    public function insertarUsuario($correo, $nombre, $apellido, $contrasenia, $fecha_n, $sexo, $telefono, $tipo) {
        $registroExitoso = false;
        $conexionDB = $this->abrirConexion();
        $sentencia = "INSERT INTO USUARIOS (id_usuario, nombre, apellido, contrasenia, fecha_n, sexo, telefono, tipo)
            VALUES ('" . $correo . "', '" . $nombre . "', '".$apellido."', '" . $contrasenia . "', '" . $fecha_n . "', '". $sexo . "',
                '" . $telefono . "',   '" . $tipo . "')";
        //echo $sentencia;
        if ($this->ejecutarConsulta($sentencia, $conexionDB)) {
            $registroExitoso = true;
        }
        $this->cerrarConexion($conexionDB);
        return $registroExitoso;
    }

    public function actualizarUsuario($correo, $nombre, $apellido, $contrasenia, $fecha_n, $sexo, $telefono, $tipo) {
        $conexion = $this->abrirConexion();        
        $sentencia = "UPDATE usuarios SET nombre = '" . $nombre . "', apellido ='" . $apellido . "', contrasenia = '" . $contrasenia . "', 
            fecha_n='" . $fecha_n . "', sexo ='".$sexo."', telefono='" .$telefono. "', tipo='" .$tipo. "'  WHERE id_usuario = '" . $correo . "' ";
        
        $resultado = $this->ejecutarConsulta($sentencia, $conexion);
        $this->cerrarConexion($conexion);
        return $resultado;
    }

//    public function seleccionarTodosUsuarios($condicion) {
//        $conexion = $this->abrirConexion();        
//        $sentencia = "SELECT * FROM usuarios $condicion ORDER BY nombre ASC";
//        $resultado_peticion = $this->ejecutarConsulta($sentencia, $conexion);
////        echo $sentencia;
//        $indice = 0;
//        $usuarios = array();
//        while ($fila = mysql_fetch_array($resultado_peticion)) {          
//            $usuarios[$indice] = new Usuario($fila['usuarioId'],$fila["contrasenia"], $fila["nombre"], $fila["apellidoP"], $fila["apellidoM"], $fila["matricula"], $fila["tipoUsuario"]);            
//            $indice++;
//        }
//        $this->cerrarConexion($conexion);
//        return $usuarios;
//    }

    public function eliminarUsuario($id_usuario) {
        $conexion = $this->abrirConexion();
        $usuarioEliminado = false;
        $sentencia = "DELETE FROM usuarios 
            WHERE id_usuario = '" . mysql_real_escape_string($id_usuario) . "'";
//        echo $query;
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

//    public function existeUsuario($matricula) {
//        $conexion = $this->abrirConexion();
//        $existeUsuario = true;
//        $query = "SELECT * FROM usuarios WHERE matricula = '" . mysql_real_escape_string($matricula) . "'";
//        $lresult = $this->ejecutarConsulta($query, $conexion);
//        if (!$lresult) {
//            $cerror = "No fue posible recuperar la información de la base de datos.<br>";
//            $cerror .= "SQL: $query <br>";
//            $cerror .= "Descripción: " . mysql_error($conexion);
//            die($cerror);
//        } else {
//            if (mysql_num_rows($lresult) === 0)
//                $existeUsuario = false;
//        }        
//        return $existeUsuario;
//    }
    
    
}

?>
