<?php
require 'autoload.php';

use modelo\usuario;
use base\persona;
use modelo\empleados;

//ejercicio 1
$u = new Usuario();
echo $u->decirHola();

//ejercicio2
$p = new empleados();
echo $p->saludar();
echo $p->trabajar();
?>