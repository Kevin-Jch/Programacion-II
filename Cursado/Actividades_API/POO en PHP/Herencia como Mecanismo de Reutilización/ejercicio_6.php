<?php
class Cuenta{
    public $saldo;

    public function __construct($saldoNuevo)
    {
        $this->saldo = $saldoNuevo;
    }
    public function depositar($deposito){
        $this->saldo = $this->saldo + $deposito;
        echo"Se depositaron $deposito$, ahora el saldo es de $this->saldo$.<br>";
    }
    public function retirar($retiro){
        $this->saldo = $this->saldo - $retiro;
        echo"Se retiro $retiro$, ahora el saldo es de $this->saldo$.<br>";
    }
}
class CuentaPremium extends Cuenta{
    public function aplicarBonificacion($bonificacion){
        $this->saldo = $this->saldo + (($this->saldo * $bonificacion)/100);
        echo"Se aplico una bonificación del $bonificacion%, ahora el saldo es de $this->saldo$.<br>";
    }
}
$cuPre = new CuentaPremium(1000);
$cuPre->depositar(100);
$cuPre->retirar(100);
$cuPre->aplicarBonificacion(10);
?>