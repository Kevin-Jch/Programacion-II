<?php
class Animal{
    public $especie;

    public function __construct($especieNueva)
    {
        $this->especie = $especieNueva;
    }
    public function emitirSonido(){
        echo"Sonido de animal";
    }
}

class Gato extends Animal{
    public function __construct($especie)
    {
     parent::__construct($especie);
    }
    public function emitirSonido()
    {
        echo"Gato $this->especie: ¡Miau!<br>";
    }

}

$gato = new Gato("Egipcio");
$gato->emitirSonido();
?>
