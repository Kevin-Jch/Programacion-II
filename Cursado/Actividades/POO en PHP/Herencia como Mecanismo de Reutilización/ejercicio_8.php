<?php
class Vehiculo {
    public $velocidad;

    public function __construct($velocidadInicial){
        $this->velocidad = $velocidadInicial;
    }
    public function acelerar(){
        echo"El vehiculo esta acelerando a $this->velocidad km/h.";
    }
}
class Camion extends Vehiculo{
    public function acelerar(){
        echo"El vehiculo esta acelerando a ". $this->velocidad + 10 ."km/h.";
    }
}
$cam = new Camion(100);
$cam->acelerar();
?>