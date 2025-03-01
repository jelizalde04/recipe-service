<?php

require_once 'controllers/UpdateRecipeNameController.php';

use Psr\Http\Message\ServerRequestInterface;

function handleRequest(ServerRequestInterface $request)
{
    $path = $request->getUri()->getPath();
    $method = $request->getMethod();

    if ($method === 'PUT' && preg_match('/^\\/update-recipe-name\\/([a-zA-Z0-9-]+)$/', $path, $matches)) {
        return (new UpdateRecipeNameController())->updateRecipeName($request, $matches[1]);
    }

    return new React\Http\Message\Response(
        404,
        ['Content-Type' => 'application/json'],
        json_encode(['error' => 'Route not found'])
    );
}
