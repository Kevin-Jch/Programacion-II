<?php
require 'ejercicio_6.php';

$db = new Database();

$db->createUser('GonzaloMatiasValor@gmail.com','Deudor');
echo "Usuario agregado.\n";

$usuario = $db->getUserById(1);
if ($usuario) {
    echo "Usuario : " . $usuario['email'] . " - Estado: " . $usuario['estado'] . "\n";
} else {
    echo "Usuario no encontrado.\n";
}

$db->updateUserEstado(1, 'Deudor');
echo "Estado actualizado.\n";


$usuario = $db->getUserById(1);
echo "Nuevo estado: " . $usuario['estado'] . "\n";
?>
