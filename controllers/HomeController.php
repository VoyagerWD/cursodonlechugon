<?php
require_once 'models/producto.php';


class homeController {
	public function index(){
		// renderizar vista
		$producto = new Producto();
		$productos = $producto->getRandom(4);
		
		require_once 'views/home.php';
	}
}