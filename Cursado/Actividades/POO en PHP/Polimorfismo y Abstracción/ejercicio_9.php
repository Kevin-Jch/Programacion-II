<?php
interface Calculable{
    public function calcularPerimetro();
}

class Cuadrado implements Calculable{
    public $lado;
    public function __construct($ladoNuevo)
    {
        $this->lado = $ladoNuevo;     
    }
    public function calcularPerimetro()
    {
        echo"El perimetro del cuadrado es de " . $this->lado * 4 . "cm.<br>";
    }
}
class Circulo implements Calculable{
    public $radio;
    public function __construct($radioNuevo)
    {
        $this->radio = $radioNuevo;
    }
    public function calcularPerimetro()
    {
        echo"El perimetro del circulo es de " . $this->radio * 2 * M_PI . ".<br>";
    }
}

$cu = new Cuadrado(10);
$cu->calcularPerimetro();

$ci = new Circulo(10);
$ci->calcularPerimetro();
?>