<?php
class Rectangulo {
	private $largo;
    private $ancho;
    
    public function __construct($ancho_inicial,$largo_inicial) {
        $this->largo = $largo_inicial;
		$this->ancho = $ancho_inicial;
    }
    public function getLargo(){
        echo "El largo el Rectángulo es $this->largo <br>";
    }
    public function getAncho(){
    	echo "El ancho del Rectángulo es $this->ancho <br>";
    }
    public function setDimensiones($anchoNuevo,$largoNuevo){
    	if($anchoNuevo >= 0 && $largoNuevo >= 0){
        $this->ancho = $anchoNuevo;
        $this->largo = $largoNuevo;
        echo "El ancho nuevo es de " . $anchoNuevo . " y el largo nuevo es de " . $largoNuevo . "<br>";
        }else{
        echo"No se aceptan valores negativos";
        }
    }
}
$rect = new Rectangulo(50,10);
$rect->getAncho();
$rect->getLargo();
$rect->setDimensiones(11,11); 
?>
