<?php
class Usuario {
	private $edad;
    
    public function __construct($edad_inicial) {
        $this->edad = $edad_inicial;
    }
    public function getEdad(){
    	echo"El usuario tiene $this->edad años <br>";
    }
    public function setEdad(){
    	if($this->edad > 0){
        echo "Aceptado <br>";
        }else{
        echo "Rechazado <br>";
        }
    }
}
$us = new Usuario(12);
$us-> getEdad();
$us-> setEdad();
?>