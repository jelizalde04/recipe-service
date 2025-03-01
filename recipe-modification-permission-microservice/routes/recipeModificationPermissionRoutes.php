<?php

require_once 'controllers/RecipeModificationPermissionController.php';

use Psr\Http\Message\ServerRequestInterface;

function handleRequest(ServerRequestInterface $request)
{
    $path = $request->getUri()->getPath();
    $method = $request->getMethod();

    if ($method === 'GET' && preg_match('/^\\/check-permission\\/([a-zA-Z0-9-]+)\\/([a-zA-Z0-9-]+)$/', $path, $matches)) {
        return (new RecipeModificationPermissionController())->checkPermission($matches[1], $matches[2]);
    }

    return new React\Http\Message\Response(
        404,
        ['Content-Type' => 'application/json'],
        json_encode(['error' => 'Route not found'])
    );
}
