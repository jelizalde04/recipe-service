<?php

require 'vendor/autoload.php';
require 'routes/getRecipeByIdRoutes.php';

use React\Http\HttpServer;
use React\Socket\SocketServer;
use Psr\Http\Message\ServerRequestInterface;

// Configuración del servidor HTTP en ReactPHP
$server = new HttpServer(function (ServerRequestInterface $request) {
    return handleRequest($request);
});

$socket = new SocketServer('0.0.0.0:4005');
$server->listen($socket);

echo "Get Recipe By ID Microservice running on port 4005\n";
