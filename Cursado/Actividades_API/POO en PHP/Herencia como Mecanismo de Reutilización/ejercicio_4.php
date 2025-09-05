<?php
abstract class Figura{
abstract public function calcularArea();
}

class Cuadrado extends Figura{
public $lado;

public function __construct($ladoNuevo)
{
    $this->lado = $ladoNuevo;
}
public function calcularArea()
{
    $area = $this->lado * $this->lado;
    echo"El área es del cuadrado es de $area ";
}
}
$cua = new Cuadrado(10);
$cua->calcularArea();
?>