<?php
class Coche {
	public $marca;
	public $modelo;
    public $color;
    
	public function detalles() {
	echo "El coche es de marca {$this->marca}, modelo {$this->modelo} de color {$this->color}.";
}
}
$coche = new Coche();
$coche-> marca = "volkswagen";
$coche-> modelo = 2000;
$coche-> color = "rojo";
$coche->detalles();
?>