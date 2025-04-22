<?php
class Vehiculo {
	private $kilometros;
    
    public function __construct($kilometro_inicial) {
        $this->kilometros = $kilometro_inicial;
    }
    public function getKilometros(){
    	echo"Los kilometros recorridos son $this->kilometros <br>";
    }
    public function avanzar($km){
    	if($km > 0){
        echo "Los kilometros recorridos son " . ($this->kilometros += $km) . "<br>";
        }
    }
}
$vei = new Vehiculo(100000);
$vei-> getkilometros();
$vei-> avanzar(10);
$vei-> avanzar(-50);
?>