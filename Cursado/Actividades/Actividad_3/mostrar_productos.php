<?php
require 'conexion.php';
try {
    $sql = 'SELECT * FROM productos ORDER BY id DESC';
    $stmt = $pdo->query($sql);

    $productos = $stmt->fetchAll(PDO::FETCH_ASSOC);

    if ($productos){
        foreach ($productos as $producto){
            echo'ID: ' . $producto['id'] . "\n";
            echo'Nombre: ' . $producto['nombre'] . "\n";
            echo'Precio: ' . $producto['precio'] . "\n";
            echo"-------------------------------------\n";
        }
    }else{
        echo'No existen productos en la base de datos';
    }
} catch (PDOException $e) {
    echo'Error: ' . $e->gerMessage() . '\n';
}
?>