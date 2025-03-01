<?php

require 'vendor/autoload.php';
require 'routes/updateRecipeNameRoutes.php';

use React\Http\HttpServer;
use React\Socket\SocketServer;
use Psr\Http\Message\ServerRequestInterface;

// Configuración del servidor HTTP en ReactPHP
$server = new HttpServer(function (ServerRequestInterface $request) {
    return handleRequest($request);
});

$socket = new SocketServer('0.0.0.0:4002');
$server->listen($socket);

echo "Update Recipe Name Microservice running on port 4002\n";
