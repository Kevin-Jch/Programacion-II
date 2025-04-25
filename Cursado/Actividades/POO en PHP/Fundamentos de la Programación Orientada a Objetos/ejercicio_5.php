<?php
class Persona {
	public $nombre;
	public $edad;
    
	public function esAdulto() {
		if($this->edad >= 18){
        echo "True";
        }else{
        echo"False";
        }
}
}
$persona = new Persona();
$persona-> nombre = "Yasmin";
$persona-> edad = 20;
$persona-> esAdulto();
?> 