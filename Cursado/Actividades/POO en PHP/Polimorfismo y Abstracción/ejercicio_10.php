<?php
abstract class Animal{
    public abstract function alimentarse();
}
class Leon extends Animal{
    public function alimentarse()
    {
        echo"*Mastica carne*<br>";
    }
}
class Pajaro extends Animal{
    public function alimentarse()
    {
        echo"*Picotea migajas de pan*<br>";
    }
}

$le = new Leon();
$le->alimentarse();

$pa= new Pajaro();
$pa->alimentarse();
?>