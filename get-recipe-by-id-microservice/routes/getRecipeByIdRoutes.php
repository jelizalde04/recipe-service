<?php

require_once 'controllers/GetRecipeByIdController.php';

use Psr\Http\Message\ServerRequestInterface;

function handleRequest(ServerRequestInterface $request)
{
    $path = $request->getUri()->getPath();
    $method = $request->getMethod();

    if ($method === 'GET' && preg_match('/^\\/get-recipe-by-id\\/([a-zA-Z0-9-]+)$/', $path, $matches)) {
        return (new GetRecipeByIdController())->getRecipeById($matches[1]);
    }

    return new React\Http\Message\Response(
        404,
        ['Content-Type' => 'application/json'],
        json_encode(['error' => 'Route not found'])
    );
}
