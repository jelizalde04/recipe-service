<?php

require 'vendor/autoload.php';
require 'routes/updateRecipeIngredientsRoutes.php';

use React\Http\HttpServer;
use React\Socket\SocketServer;
use Psr\Http\Message\ServerRequestInterface;

// Configuración del servidor HTTP en ReactPHP
$server = new HttpServer(function (ServerRequestInterface $request) {
    return handleRequest($request);
});

$socket = new SocketServer('0.0.0.0:4003');
$server->listen($socket);

echo "Update Recipe Ingredients Microservice running on port 4003\n";
