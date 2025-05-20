<?php
require 'conexion.php';
try {
    $sql= "INSERT INTO productos (nombre,precio) VALUES(:nombre, :precio)";
    $stmt = $pdo->prepare($sql);
    
    $productos = [
        ['nombre' =>'Lupa', 'precio' => 1500],
        ['nombre' => 'Lapiz', 'precio' => 2000],
        ['nombre' => 'Regla', 'precio' => 4500],
        ['nombre' => 'Hojas A4', 'precio' => 200],
        ['nombre' => 'Birome', 'precio' => 2500.00]
    ];
foreach ($productos as $producto){
    $stmt-> execute([
        ':nombre'=> $producto['nombre'],
        ':precio'=> $producto['precio'] 
    ]);
}
echo'Se crearon los productos corectamente';
}catch(PDOException $e){
    echo'Error al crear los productos' . $e->getMessage();
}
?>