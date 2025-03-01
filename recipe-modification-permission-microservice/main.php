<?php

require 'vendor/autoload.php';
require 'routes/recipeModificationPermissionRoutes.php';

use React\Http\HttpServer;
use React\Socket\SocketServer;
use Psr\Http\Message\ServerRequestInterface;

// Configuración del servidor HTTP en ReactPHP
$server = new HttpServer(function (ServerRequestInterface $request) {
    return handleRequest($request);
});

$socket = new SocketServer('0.0.0.0:4009');
$server->listen($socket);

echo "Recipe Modification Permission Microservice running on port 4009\n";
