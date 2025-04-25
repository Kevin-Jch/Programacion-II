<?php
class Producto {
	private $precio;
    
    public function __construct($precio_inicial) {
        $this->precio = $precio_inicial;
    }
    public function getPrecio(){
    	echo"El precio es de $this->precio <br>";
    }
    public function setPrecio($precioNuevo){
    	if($precioNuevo >= 0){
        $this-> precio = $precioNuevo;
        echo "El precio nuevo es de: " . $this-> precio . "<br>";
        }else{
        echo "No se permiten valores negativos <br>";
        }
    }
}
$pro = new Producto(120);
$pro-> getPrecio();
$pro-> setPrecio(500);

$precio = new Producto(10);
$precio-> getPrecio();
$precio-> setPrecio(-20);
?>
