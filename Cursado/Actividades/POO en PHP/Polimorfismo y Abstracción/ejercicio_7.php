<?php

use Dom\Text;

interface Comunicable{
    public function enviarMensaje();
}
class Correo implements Comunicable{
public $texto;
public function __construct($textoNuevo){
    $this->texto = $textoNuevo;
}
public function enviarMensaje()
{
    echo"@gmail<br>  $this->texto<br>";
}
}
class Texto implements Comunicable{
public $texto;
public function __construct($textoNuevo){
    $this->texto = $textoNuevo;
}
public function enviarMensaje()
{
    echo"$this->texto.txt<br>";
}
}

$cor = new Correo("te espero en Av.Pellegrini");
$cor->enviarMensaje();

$te = new Texto("Texto de prueba");
$te->enviarMensaje();
?>