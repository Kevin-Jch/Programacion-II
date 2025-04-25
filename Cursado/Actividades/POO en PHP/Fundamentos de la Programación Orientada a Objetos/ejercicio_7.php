<?php
class Producto {
	public $nombre;
    public $precio;
    public $stock;
    
	public function valorInventario() {
        echo "El valor de inventario es de " . ($this->precio * $this->stock);
        }
}
$producto = new Producto();
$producto-> nombre = "Alfajor Tatin";
$producto-> precio = 50;
$producto-> stock = 107;
$producto-> valorInventario();
?>