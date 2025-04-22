<?php
class Trabajador {
	public $nombre;
    public $cargo;
    public $salario;
    
	public function informacion() {
        echo "El nombre del trabajador es $this->nombre, su cargo es $this->cargo y su salario es de $this->salario";
        }
}
$trab = new Trabajador();
$trab-> nombre = "Gonzalo";
$trab-> cargo = "Plomero";
$trab-> salario = 17.50;
$trab-> informacion();
?>