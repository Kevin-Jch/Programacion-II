<?php
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Factory\AppFactory;
use Tuupola\Middleware\HttpBasicAuthentication;

require __DIR__ . '/../vendor/autoload.php';

$app = AppFactory::create();

$app->add(new HttpBasicAuthentication([
    "path" => "/",
    "users" => [
        "user" => "juan"
    ],
    "secure" => false
]));

$app->get('/Autentificacion/public/protected', function (Request $request, Response $response, $args) {
    $response->getBody()->write("Ruta protegida accesible");
    return $response;
});

$app->run();
?>