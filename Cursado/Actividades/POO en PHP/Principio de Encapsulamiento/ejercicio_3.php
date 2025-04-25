<?php
class Producto {
	private $precio;
    
    public function __construct($precio_inicial) {
        $this->precio = $precio_inicial;
    }
    public function getPrecio(){
    	echo"El precio es de $this->precio <br>";
    }
    public function setPrecio(){
    	if($this->precio >= 0){
        echo "El precio es positivo <br>";
        }else{
        echo "El precio es negativo <br>";
        }
    }
}
$pro = new Producto(120);
$pro-> getPrecio();
$pro-> setPrecio();

$precio = new Producto(-20);
$precio-> getPrecio();
$precio-> setPrecio();
?>