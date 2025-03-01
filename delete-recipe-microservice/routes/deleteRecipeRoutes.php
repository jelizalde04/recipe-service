<?php

require_once 'controllers/DeleteRecipeController.php';

use Psr\Http\Message\ServerRequestInterface;

function handleRequest(ServerRequestInterface $request)
{
    $path = $request->getUri()->getPath();
    $method = $request->getMethod();

    if ($method === 'DELETE' && preg_match('/^\\/delete-recipe\\/([a-zA-Z0-9-]+)$/', $path, $matches)) {
        return (new DeleteRecipeController())->deleteRecipe($matches[1]);
    }

    return new React\Http\Message\Response(
        404,
        ['Content-Type' => 'application/json'],
        json_encode(['error' => 'Route not found'])
    );
}
