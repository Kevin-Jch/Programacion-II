<?php
abstract class Trabajador{
    public $nombre;
    public $sueldo;
    public function __construct($nombreNuevo,$sueldoNuevo)
    {
        $this->nombre = $nombreNuevo;
        $this->sueldo = $sueldoNuevo;
    }
    abstract function calcularIngreso();
}

class Fijo extends Trabajador{
    public function calcularIngreso()
    {
        echo"El sueldo fijo de $this->nombre es " . $this->sueldo * 30 . "$.<br>";
    }
}
class Temporal extends Trabajador{
    public function calcularIngreso()
    {
        echo"El sueldo por 4 horas de $this->nombre es de " . $this->sueldo * 4 . "$.<br>";
    }
}
$fijo = new Fijo("Gonzalo",500);
$fijo->calcularIngreso();

$tem = new Temporal("Yasmin",3500);
$tem->calcularIngreso();
?>