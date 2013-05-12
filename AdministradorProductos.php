<?php
include_once './BD/ProductoDAO.php';
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
class AdministradorProductos{
    public function buscarEventos($texto){
		$DAOProducto = new ProductoDAO();
		return $DAOProducto->buscarProducto($texto);
	}
}
?>