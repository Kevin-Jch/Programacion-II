<?php
class Estudiante {
	public $nombre;
	public $edad;
    public $matricula;
    
	public function mostrarDatos() {
	echo "El alumno/a se llama {$this->nombre}, tiene {$this->edad} y su matricula es {$this->matricula}.";
}
}
$estu = new Estudiante();
$estu-> nombre = "Juan";
$estu-> edad = 15;
$estu-> matricula = 20;
$estu->mostrarDatos();

?>