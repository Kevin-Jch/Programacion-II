<?php
class Cuenta {
	public $saldo;
    
	public function ingresar() {
    	$this-> saldo += 100;
        echo "El saldo es de $this->saldo";
        }
	public function retirar(){
    	$this-> saldo -= 100;
        echo "El saldo es de $this->saldo";
    }
}
$cuenta = new Cuenta();
$cuenta-> saldo = 500;
$cuenta-> ingresar();
?>