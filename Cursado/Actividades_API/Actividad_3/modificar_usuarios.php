<?php
require 'conexion.php';
try{
$idUsuario = 1;
$nuevoEstado = "Al día";

$sql = "UPDATE usuarios SET estado = :estado WHERE id= :id";
$stmt = $pdo->prepare($sql);
$stmt->execute([':estado' => $nuevoEstado, ':id' => $idUsuario]);

echo"Usuario actualizado correctamente\n";
}catch(PDOException $e){
    echo'Error: ' . $e->gerMessage() . '\n';
}
?>