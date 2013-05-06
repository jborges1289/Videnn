<?php

include_once 'BD/UsuarioDAO.php';

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ServicioUsuario
 *
 * @author juAN
 */
class ServicioUsuario {
    //put your code here

    public function actualizarUsuario($nombre, $usuario, $contrasenia) {
        $usuarioDAO = new UsuarioDAO();
        $exito = $usuarioDAO->actualizarUsuario($nombre, $usuario, $contrasenia);
        
        if ($exito) {
            return true;
        } else {
            return false;
        }
    }

    public function eliminarUsuario($id_usuario) {
        $usuarioDAO = new UsuarioDAO();
        
        
        if ($usuarioDAO->eliminarUsuario($id_usuario)) {
            return true;
        } else {
            return false;
        }
    }

    public function agregarUsuario($nombre, $usuario, $contrasenia) {
        $usuarioDAO = new UsuarioDAO();        
        if (!$usuarioDAO->existeUsuario($usuario)) {
            $usuarioDAO->insertarUsuario($nombre, $usuario, $contrasenia);
            return true;
        } else {
            return false;
        }
    }

    public function buscarUsuarioPorId($id_usuario) {
        $usuarioDAO = new UsuarioDAO();
        return $usuarioDAO->seleccionarUsuarioPorId($id_usuario);
    }

    public function obtenerTodosUsuarios() {
        $usuarioDAO = new UsuarioDAO();
        return $usuarioDAO->seleccionarTodosUsuarios("");
    }

  
}
?>