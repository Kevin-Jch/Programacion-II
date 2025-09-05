<?php
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Factory\AppFactory;
use Tuupola\Middleware\JwtAuthentication;
use Firebase\JWT\JWT;
use Tuupola\Middleware\HttpBasicAuthentication;

require __DIR__ . '/../vendor/autoload.php';
require 'conexion.php';
require 'role.php';

$app = AppFactory::create();
$app->addBodyParsingMiddleware();   

$app->post('/login', function (Request $request, Response $response) {
    // $data = $request->getParsedBody();
    $header = $request->getHeaderLine('Authorization');
    //validar qu el ancabezado empiece con Basic, sino entra al if y tira error 
    if (strpos($header, 'Basic ') !== 0) {
        $response->getBody()->write(json_encode(["error" => "Falta encabezado Authorization"]));
        return $response->withStatus(400)->withHeader('Content-Type', 'application/json');
    }

    // Decodificar credenciales  (quitar Basic) y comvertir a texto
    $solocredenciales = substr($header, 6);     //6: para empezar en la posicion 6 (Basic)
    $textocredenciales = base64_decode($solocredenciales);

    $partes = explode(':', $textocredenciales, 2);
    $username = $partes[0];
    $password = $partes[1];
    if ($username == 'kevin' && $password == '123'){
        $role='admin';
    }
    else if($username == 'user' && $password == 'juan'){
        $role='usuario';
    } else {
        $response->getBody()->write("Credenciales inválidas");
        return $response->withStatus(401);
    }
        $key = "your_secret_key";
        $payload = [
            "iss" => "example.com",
            "aud" => "example.com",
            "iat" => time(),
            "nbf" => time(),
            "exp" => time() + 3600,
            "data" => [
                "username" => $username,
                "role"=>$role
            ]
        ];
        $token = JWT::encode($payload, $key, 'HS256');
        $response->getBody()->write(json_encode(["token" => $token]));
    return $response->withHeader('Content-Type', 'application/json');
});

// Middleware JWT
$app->add(new JwtAuthentication([
    "secret" => "your_secret_key",
    "attribute" => "token",
    "path" => "/Actividad_7/public/",
    "ignore" => ["/Actividad_7/public/login"],
    "algorithm" => ["HS256"],
    "secure" => false
]));    




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
})->add(new RoleMiddleware(['admin']));

$app->addErrorMiddleware(true,true,true);
$app->setBasePath("/Actividad_7/public");
$app->run();
?>