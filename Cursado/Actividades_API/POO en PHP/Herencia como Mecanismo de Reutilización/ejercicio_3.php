<?php
class Persona{
    public $nombre;
    public $edad;

    public function __construct($nombreNuevo,$edadNueva)
    {
        $this->nombre = $nombreNuevo;
        $this->edad = $edadNueva;
    }

    public function saludar(){
        echo"Hola";
    }
}

class Profesor extends Persona{
    public $Materia;
    public function __construct($MateriaNueva,$nombre,$edad)
    {
        parent::__construct($nombre,$edad);
        $this->Materia = $MateriaNueva;
    }
    public function saludar()
    {
        echo"Buen dia alumnos de $this->Materia, soy $this->nombre y tengo $this->edad años. <br>";
    }
}

$prof = new Profesor("Lengua","Lucas",35);
$prof->saludar();
?>