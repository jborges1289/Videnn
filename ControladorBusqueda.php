<?php
include_once './ListarProducto.php';

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
class ControladorBusqueda {
	public function buscar($texto){
				$buscadorProductos = new AdministradorProductos();
				$productos = $buscadorProductos->buscarEventos($texto);
				return $this->listarProductos($productos);
			
        }
	
	public function listarProductos($productos){
		$listaProductos= new ListarProducto();
		return $listaProductos->listarProductos($productos);
	}
}
?>
