<?php
interface Nadador{
    public function nadar();
}
class Pez implements Nadador{
    public function nadar(){
        echo"El pez aletea y nada";
    }
}
class Persona implements Nadador{
    public function nadar(){
        echo"La persona hace movimientos continuos, una secuencia de brazadas y patadas que se entrelazan en un ritmo suave y fluido. El nadador se transforma en un ser que se mueve con la gracia de un pez, que se desplaza con la libertad de un espíritu que fluye con la corriente y nada.";
    }
}
$per = new Persona;
$per->nadar();

$pez = new Pez;
$pez->nadar();
?>