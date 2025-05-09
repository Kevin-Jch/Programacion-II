<?php
class Circulo {
	private $radio;
    
    public function __construct($radio_inicial) {
        $this->radio = $radio_inicial;
    }
    public function getRadio(){
    	echo "El Circulo tiene un radio de $this->radio cm <br>";
    }
    public function setRadio($radioNuevo){
    	if($radioNuevo >= 0){
        $this->radio = $radioNuevo;
        echo "El Circulo ahora tiene un radio de $this->radio cm <br>";
        }else{
        echo"No se aceptan valores menores a 0 <br>";
        }
    }
}
$cir = new Circulo(10);
$cir->getRadio();
$cir->setRadio(100);
?>
