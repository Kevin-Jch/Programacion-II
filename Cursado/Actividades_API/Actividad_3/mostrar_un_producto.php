<?php
require 'conexion.php';

$nombreBuscado = isset($_GET ['nombre']) ? $_GET['nombre'] : 'Hojas A4';
if($nombreBuscado){
    try {
        $sql = "SELECT * FROM productos WHERE nombre = :nombre";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([':nombre' => $nombreBuscado]);

        $producto = $stmt->fetch(PDO::FETCH_ASSOC);

        if($producto){
            echo"ID: " . $producto['id'] . "\n";
            echo"Nombre: " . $producto['nombre'] . "\n";
            echo"Precio: " . $producto['precio'] . "$\n";
        }else{
            echo"Producto no encontrado\n";
        }
        } catch (PDOException $e) {
        echo'Error: ' . $e->gerMessage() . '\n';
        }
    }else{
        echo"Ingrese el nombre de un producto";
    } 
?>