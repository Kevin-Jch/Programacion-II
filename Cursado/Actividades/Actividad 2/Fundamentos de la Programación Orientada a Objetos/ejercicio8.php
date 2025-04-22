<?php
class Circulo {
	public $radio;
    
	public function calcularPerimetro() {
        echo "El perimetro es " . ($this->radio * M_PI * 2 );
        }
}
$circulo = new Circulo();
$circulo-> radio = 83;
$circulo-> calcularPerimetro();
?>
