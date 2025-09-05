<?php
class Libro {
	private $numeroPaginas;
    
    public function __construct($numeroPaginas_inicial) {
        $this->numeroPaginas = $numeroPaginas_inicial;
    }
    public function getPaginas(){
    	echo "El libro tiene $this->numeroPaginas páginas <br>";
    }
    public function setPaginas($paginasNuevas){
    	if($paginasNuevas > 0){
        $this->numeroPaginas = $paginasNuevas;
        echo "El libro ahora tiene $paginasNuevas páginas <br>";
        }else{
        echo"No se aceptan valores menores o iguales a 0 <br>";
        }
    }
}
$lib = new libro(10);
$lib->getPaginas();
$lib->setPaginas(15);
$lib->setPaginas(0);
?>
