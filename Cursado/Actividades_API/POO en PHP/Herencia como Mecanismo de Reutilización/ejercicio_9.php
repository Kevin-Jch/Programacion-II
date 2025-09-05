<?php
class Empleado{
    public $nombre;
    public $salario;

    public function __construct($nombreNuevo,$salarioNuevo){
        $this->nombre = $nombreNuevo;
        $this->salario = $salarioNuevo;
    }
    public function calcularPago(){
        return $this->salario;
    }
}
class Freelancer{
    public function calcularPago($horas){
        echo"El salario del Freelancer es de " . $this->salario * $horas . "$";
    }
}
$fre = new Freelancer("Juan",500);
$fre->calcularPago(2);
?>