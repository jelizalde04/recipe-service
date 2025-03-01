<?php

require_once 'controllers/UpdateRecipeIngredientsController.php';

use Psr\Http\Message\ServerRequestInterface;

function handleRequest(ServerRequestInterface $request)
{
    $path = $request->getUri()->getPath();
    $method = $request->getMethod();

    if ($method === 'PUT' && preg_match('/^\\/update-recipe-ingredients\\/([a-zA-Z0-9-]+)$/', $path, $matches)) {
        return (new UpdateRecipeIngredientsController())->updateRecipeIngredients($request, $matches[1]);
    }

    return new React\Http\Message\Response(
        404,
        ['Content-Type' => 'application/json'],
        json_encode(['error' => 'Route not found'])
    );
}
