<?php
class Empleado {
	private $sueldo;
    
    public function __construct($sueldo_inicial) {
        $this->sueldo = $sueldo_inicial;
    }
    public function getSueldo(){
    	echo "El empleado tiene un sueldo de $this->sueldo$ <br>";
    }
    public function aumentarSueldo($porcentaje){
    	if($porcentaje > 0){
        $sueldoNuevo = $this->sueldo + ($this->sueldo * ($porcentaje/100));
        $this->sueldo = $sueldoNuevo;
        echo "El empleado recibio un aumento del $porcentaje%, ahora su sueldo es de $sueldoNuevo$ <br>";
        }else{
        echo"No se aceptan valores menores o iguales a 0 <br>";
        }
    }
}
$emp = new Empleado(50);
$emp->getSueldo();
$emp->aumentarSueldo(100);
?>
