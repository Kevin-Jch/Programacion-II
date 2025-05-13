<?php
abstract class Figura{
    abstract public function area();
}

class Triangulo extends Figura{
    public $altura;
    public $base;
    public function __construct($baseNueva,$alturaNueva)
    {
        $this->base = $baseNueva;
        $this->altura = $alturaNueva;
    }
    public function area()
    {
        echo "El area del triangulo es " . $this->base * $this->altura . "<br>";
    }
}
class Circulo extends Figura{
    public $radioNuevo;
    public function __construct($radioNuevo)
    {
        $this->radio = $radioNuevo;
    }

    public function area(){
        echo"El area del circulo es " . M_PI * pow($this->radio, 2) . "<br>" ;
    }
}

$tri = new Triangulo(10,10);
$tri->area();
$cir = new Circulo(50);
$cir->area();
?>