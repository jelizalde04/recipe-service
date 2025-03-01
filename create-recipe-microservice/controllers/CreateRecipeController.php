<?php

require_once 'services/RecipeService.php';

use Psr\Http\Message\ServerRequestInterface;
use React\Http\Message\Response;
use function React\Promise\resolve;

class CreateRecipeController
{
    private $recipeService;

    public function __construct()
    {
        $this->recipeService = new RecipeService();
    }

    public function createRecipe(ServerRequestInterface $request)
    {
        $body = json_decode((string) $request->getBody(), true);
        
        if (!isset($body['name']) || !isset($body['ingredients']) || !isset($body['steps'])) {
            return new Response(400, ['Content-Type' => 'application/json'], json_encode(['error' => 'Invalid input']));
        }

        return resolve($this->recipeService->createRecipe($body));
    }
}
