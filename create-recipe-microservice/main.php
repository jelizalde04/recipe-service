<?php

require 'vendor/autoload.php';
require 'routes/createRecipeRoutes.php';

use React\Http\HttpServer;
use React\Socket\SocketServer;
use Psr\Http\Message\ServerRequestInterface;
use React\Promise\Promise;
use function React\Promise\resolve;

// Configuración del servidor HTTP en ReactPHP
$server = new HttpServer(function (ServerRequestInterface $request) {
    return handleRequest($request);
});

$socket = new SocketServer('0.0.0.0:4001');
$server->listen($socket);

echo "Create Recipe Microservice running on port 4001\n";
