<?php
abstract class Vehiculo{
    abstract public function desplazarse();
}
class Bicicleta extends Vehiculo{
    public function desplazarse(){
        echo"La persona pedalea y se mueve la bicicleta";
    }
}
class Avion extends Vehiculo{
    public function desplazarse(){
        echo"El piloto prende los motores y el avion vuela";
        }
}

$bi = new Bicicleta();
$bi->desplazarse();

$av = new Avion();
$av->desplazarse();
?>