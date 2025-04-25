<?php
class CuentaBancaria {
	private $saldo;
    
    public function __construct($saldoInicial) {
        $this->saldo = $saldoInicial;
    }
    public function getSaldo(){
    	echo"El saldo es de $this->saldo";
    }
    public function depositar(){
    	$this->saldo += 500;
    }
}
$cb = new CuentaBancaria(12);
$cb-> depositar();
$cb-> getSaldo();
?>