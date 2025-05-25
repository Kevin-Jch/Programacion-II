<?php
require 'autoload.php';

use modelo\usuario;
use base\persona;
use modelo\empleados;
use proveedores\herramientas\ayudante;
use vistas\vista;
use controladores\controladorUsuario;
use utilidades\matematica;
use configuracion\ConfiguracionApp;
use ayudantes\funciones;

//ejercicio 1
$u = new Usuario();
echo $u->decirHola();

//ejercicio2
$p = new empleados();
echo $p->saludar();
echo $p->trabajar();

//ejercicio3
$a = new ayudante();
echo $a->ayudar();

//ejercicio4
$v = new vista();
echo $v->renderizar();

//ejercicio6
$us = new controladorUsuario();
echo $us->inicio();

//ejercicio7
$m = new matematica();
echo $m->sumar(5,5);

//ejercicio8
$c = new ConfiguracionApp();
echo $c::NOMBRE_APP;

//ejercicio9
$ayu = new funciones();
echo $ayu->saludar();

//ejercicio10
$cu = new controladorUsuario();
echo $cu->mostrarNombre();
?>