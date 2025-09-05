<?php
class libro {
public $Titulo;
public $Autor;
}


$libro = new libro();
$libro-> Titulo = "El Principito";
$libro-> Autor = "Antoine de Saint-Exupéry";

echo "El libro es $libro->Titulo y su autor es $libro->Autor";

?> 
