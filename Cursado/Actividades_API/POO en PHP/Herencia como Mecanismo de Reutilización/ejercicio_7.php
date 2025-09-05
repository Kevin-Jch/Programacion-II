<?php
abstract class Instrumento{
    abstract public function sonar();
}
class Piano extends Instrumento{
    public function sonar()
    {
        echo"*8va sinfonia de Beethoven*";
    }
}
$pi = new Piano();
$pi->sonar();
?>