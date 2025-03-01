<?php

require_once 'services/RecipeService.php';

use Psr\Http\Message\ServerRequestInterface;
use React\Http\Message\Response;
use function React\Promise\resolve;

class UpdateRecipeNameController
{
    private $recipeService;

    public function __construct()
    {
        $this->recipeService = new RecipeService();
    }

    public function updateRecipeName(ServerRequestInterface $request, $recipeId)
    {
        $body = json_decode((string) $request->getBody(), true);

        if (!isset($body['newName'])) {
            return new Response(400, ['Content-Type' => 'application/json'], json_encode(['error' => 'Invalid input']));
        }

        return resolve($this->recipeService->updateRecipeName($recipeId, $body['newName']));
    }
}
