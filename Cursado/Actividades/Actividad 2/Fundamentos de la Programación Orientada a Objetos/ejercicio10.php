<?php
class Triangulo {
	public $base;
    public $altura;
    
	public function area() {
        echo "El área del triángulo es de " . ($this->base * $this->altura)/2;
        }
}
$tri = new Triangulo();
$tri-> base = 50;
$tri-> altura = 20;
$tri-> area();
?>