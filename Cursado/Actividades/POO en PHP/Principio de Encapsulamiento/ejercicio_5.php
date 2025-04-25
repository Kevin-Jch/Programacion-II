<?php
class Alumnos {
	private $calificaciones;
    
    public function __construct($calificaciones_iniciales) {
        foreach ($calificaciones_iniciales as $nota) {
            $this->agregarCalificacion($nota);
    }	
    }
    public function agregarCalificacion($nota){
    	 if ($nota >= 0 && $nota <= 10) {
            $this->calificaciones[] = $nota;
        }
    }
    public function getPromedio(){
    	if (count($this->calificaciones) === 0){
        return 0;
        }
        echo"El promedio del alumno es de " . (array_sum($this->calificaciones) / count($this->calificaciones)) . "<br>";
    }
}
$alum = new Alumnos([10,10,10]);
$alum-> agregarCalificacion(2);
$alum-> getPromedio();
?>