<?php
interface Reproducible{
    public function reproducir();
}
class Pelicula implements Reproducible{
    public function reproducir()
    {
        echo"*Film reproduciendose*<br>";
    }
}
class Podcast implements Reproducible{
    public function reproducir()
    {
        echo"*Sonido.mp3*<br>";
    }
}
$pel = new Pelicula;
$pel->reproducir();

$pod = new Podcast;
$pod->reproducir();
?>