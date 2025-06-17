<?php
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Factory\AppFactory;

require __DIR__ . '/../vendor/autoload.php';
require 'conexion.php';

$app = AppFactory::create();

$app->get('/Persona', function (Request $request, Response $response) use ($pdo) {
    try{
        $start = $pdo->query("SELECT * FROM persona");
        $persona = $start->fetchAll();

        $response->getBody()->write(json_encode($persona));
        return $response->withHeader('Content-Type', 'application/json');
    }catch(PDOException $e) {
            $error = ['Error' => $e->getMessage()];
    
    }});

$app->post('/Persona', function (Request $request, Response $response) use ($pdo) {
    $data = json_decode($request->getBody(), true); 

    $sql = "INSERT INTO persona (id,nombre) VALUES (:id , :nombre)";
    $stmt = $pdo->prepare($sql) ;

    try{
        $stmt->execute([
            ':id' => $data['id'],
            ':nombre' => $data['nombre']
        ]);
        $response->getBody()->write(json_encode(['mesage' => 'Creación exitosa']));
        return $response->withHeader('Content-Type', 'application/json')->withStatus(201);
    }catch(PDOException $e) {
            $error = ['Error' => $e->getMessage()];
    }
});

$app->put('/Persona/{id}', function ($request, $response, $args) use ($pdo) {
    $id = $args['id'];
    $data = json_decode($request->getBody(), true);

    $sql = "UPDATE persona SET nombre = :nombre WHERE id = :id";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([
        ':id' => $id,
        ':nombre' => $data['nombre']
    ]);

    $response->getBody()->write(json_encode(['message' => 'Datos actualizados']));
    return $response->withHeader('Content-Type', 'application/json');
});

$app->delete('/Persona/{id}', function ($request, $response, $args) use ($pdo) {
    $id = $args['id'];

    $sql = "DELETE FROM persona WHERE id = :id";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([':id' => $id]);

    $response->getBody()->write(json_encode(['message' => 'Persona eliminada']));
    return $response->withHeader('Content-Type', 'application/json');
});
$app->addErrorMiddleware(true, true, true);
$app->setBasePath("/Actividad_7/public");
$app->run();
?>