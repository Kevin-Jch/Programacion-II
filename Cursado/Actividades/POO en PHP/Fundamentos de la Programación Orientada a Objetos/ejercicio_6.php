<?php
class Cuenta {
	public $saldo;
    
	public function ingresar($ingresar) {
    	$this-> saldo += $ingresar;
        echo "Ingreso aceptado, el saldo nuevo es de $this->saldo <br>";
        }
	public function retirar($retirar){
    	$this-> saldo -= $retirar;
        echo "Retiro aceptado, el saldo nuevo es de $this->saldo <br>";
    }
}
$cuenta = new Cuenta();
$cuenta->saldo = 500;
$cuenta->ingresar(120);
$cuenta->retirar(120);
?>
