<?php
class Animal{
    public $nombre;
    public function __constuct($nuevoNombre){
        $this->nombre = $nuevoNombre;
    }
    public function moverse(){
        echo"El animal se esta moviendo";
    }
}
class Pez extends Animal{
    public $tipoAgua;
    public function __constuct($tipoAguaNuevo){
        $this->tipoAgua = $tipoAguaNuevo;
    }

    public function moverse(){
        echo"El pez $this->nombre de agua $this->tipoAgua esta nadando.";
    }
}
$pe = new Pez("Marlin","Dulce");
$pe->moverse();
?>