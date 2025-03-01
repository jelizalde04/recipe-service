<?php

require_once 'controllers/ListAllRecipesController.php';

use Psr\Http\Message\ServerRequestInterface;

function handleRequest(ServerRequestInterface $request)
{
    $path = $request->getUri()->getPath();
    $method = $request->getMethod();

    if ($method === 'GET' && $path === '/list-all-recipes') {
        return (new ListAllRecipesController())->listAllRecipes();
    }

    return new React\Http\Message\Response(
        404,
        ['Content-Type' => 'application/json'],
        json_encode(['error' => 'Route not found'])
    );
}
