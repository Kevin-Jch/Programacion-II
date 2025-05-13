<?php
interface Printable{
    public function imprimir();
}
class Documento implements Printable{
    public function imprimir(){
        echo"brrr *se imprime*";
    }
}
class Foto implements Printable{
    public function imprimir(){
        echo"tsh *Se imprime la foto*";
    }
}

$doc= new Documento();
$doc->imprimir();

$fo = new Foto();
$fo->imprimir();
?>