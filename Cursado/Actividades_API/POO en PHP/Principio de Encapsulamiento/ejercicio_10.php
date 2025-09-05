<?php
class CuentaCorriente {
	private $saldo;
    private $limite;
    
    public function __construct($saldo_inicial,$limite_nuevo) {
        $this->saldo = $saldo_inicial;
        $this->limite = $limite_nuevo;
    }
    public function getSaldo(){
    	echo "La cuenta corriente tiene un saldo de $this->saldo$ <br>";
    }
    public function retirar($retirar){
    	if($retirar < ($this->saldo + $this->limite)){
        $this->saldo = $this->saldo - $retirar;
        echo "Se retiro $retirar$ de la cuenta corriente, ahora esta tiene un saldo de $this->saldo$ <br>";
        }else{
        echo"No se aceptan valores mayores al limite asignado <br>";
        }
    }
}
$cue = new CuentaCorriente(50,100);
$cue->getSaldo();
$cue->Retirar(100);
?>
