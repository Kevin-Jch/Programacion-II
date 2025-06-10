<?php

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Factory\AppFactory;

require __DIR__ . '/../vendor/autoload.php';

$app = AppFactory::create();

$app->get('/Persona', function (Request $request, Response $response) {
$data = array('Nombre' => 'Juan', 'Edad' => 12);
$payload = json_encode($data);

$response->getBody()->write($payload);
    return $response
    ->withHeader('Content-Type', 'application/json');
});

$app->post('/Persona', function (Request $request, Response $response) {
    $body = $request->getBody()->getContents();
    $data = json_decode($body, true); 

    $nombre = $data['nombre'] ?? 'Sin nombre';
    $edad = $data['edad'] ?? 'Sin edad';

    // respuesta
    $respuesta = [
        'mensaje' => 'Recibido',
        'nombre' => $nombre,
        'edad' => $edad
    ];

    $response->getBody()->write(json_encode($respuesta));
    return $response->withHeader('Content-Type', 'application/json');
});
$app->addErrorMiddleware(true, true, true);
$app->setBasePath("/Actividad_6/api/public");
$app->run();
