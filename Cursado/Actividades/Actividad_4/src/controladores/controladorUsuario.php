<?php
namespace controladores;
use modelo\usuario;

class controladorUsuario{
    public function inicio(){
        return"Pagina de usuarios";
    }

    public function mostrarNombre(){
        $us = new Usuario;
        return"El nombre del usuario es " . $us->obtenerNombre;
    }
}
?>