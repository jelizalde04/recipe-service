<?php

require 'vendor/autoload.php';
require 'routes/deleteRecipeRoutes.php';

use React\Http\HttpServer;
use React\Socket\SocketServer;
use Psr\Http\Message\ServerRequestInterface;

// Configuración del servidor HTTP en ReactPHP
$server = new HttpServer(function (ServerRequestInterface $request) {
    return handleRequest($request);
});

$socket = new SocketServer('0.0.0.0:4007');
$server->listen($socket);

echo "Delete Recipe Microservice running on port 4007\n";

