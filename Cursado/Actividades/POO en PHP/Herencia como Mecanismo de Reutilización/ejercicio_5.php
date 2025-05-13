<?php
class Producto{
public $nombre;
public $precio;

public function __construct($nombreNuevo,$precioNuevo)
{
    $this->nombre = $nombreNuevo;
    $this->precio = $precioNuevo; 
}

public function detalle(){
    echo"$this->nombre: $this->precio$";
}
}

class ProductoOferta extends Producto{
public $descuento;

public function detalle()
{
    $this->descuento = 10;
    $this->precio = $this->precio - (($this->precio * $this->descuento)/100);
    echo"$this->nombre: $this->precio$";
}
}

$proOf = new ProductoOferta("Queso","1000");
$proOf->detalle();
?>
