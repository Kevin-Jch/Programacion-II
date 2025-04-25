<?php
class Rectangulo {
	public $largo;
	public $ancho;
    
	public function calcularArea() {
	echo "El area del rectángulo es: ". ($this->largo * $this->ancho);
}
}
$rectangulo = new Rectangulo();
$rectangulo-> largo = 5;
$rectangulo-> ancho = 5;
$rectangulo->calcularArea();

?>