<?php
class Vehiculo{
    public $marca;

    public function __construct($marcaNueva)
    {
        $this->marca = $marcaNueva;
    }

    public function avanzar(){
        echo "El vehiculo de marca: $this->marca esta avanzando <br>";
    }
}

class Moto extends Vehiculo{
    public $cilindrada;

    public function __construct($marca,$cilindradaNueva)
    {
        parent::__construct($marca);
        $this->cilindrada = $cilindradaNueva;
    }

    public function avanzar()
    {
        echo"La moto de marca: $this->marca con cilindrada: $this->cilindrada esta avanzando <br>";
    }
}

$moto = new Moto("Kawasaki","Media");
$moto->avanzar();
?>
