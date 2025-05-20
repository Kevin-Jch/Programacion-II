<?php
abstract class Instrumento{
    public abstract function Tocar();
}
class Violin extends Instrumento{
    public function Tocar()
    {
        echo"*Ruido de violin*<br>";
    }
}
class Bateria extends Instrumento{
    public function Tocar()
    {
        echo"*Ruido de bateria*<br>";
    }
}

$vi = new Violin;
$vi->Tocar();

$ba = new Bateria;
$ba->Tocar();
?>