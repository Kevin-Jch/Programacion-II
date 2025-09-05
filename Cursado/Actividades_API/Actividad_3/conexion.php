<?php
$host = 'localhost';  
$db   = 'actividad3';  
$port = 3306;  
$charset = 'utf8mb4';  
$dsn = "mysql:host=$host;port=$port;dbname=$db;charset=$charset";
$usuario = 'root';
$password = 'kevin';

$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,    // Excepciones en caso de error
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,          // Fetch por defecto en array asociativo
    PDO::ATTR_EMULATE_PREPARES   => false,                     // Sentencias preparadas reales
];

try {
    $pdo = new PDO($dsn, $usuario, $password, $options);
    echo"Conexión exitosa \n";
} catch (PDOException $e) {
    // Manejar error de conexión (log y mensaje genérico al usuario)
    error_log($e->getMessage());
    echo'Error al conectarse a la base de datos.';
}
?>