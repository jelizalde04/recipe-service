<?php

require_once 'services/RecipeService.php';

use Psr\Http\Message\ServerRequestInterface;
use React\Http\Message\Response;
use function React\Promise\resolve;

class UpdateRecipeIngredientsController
{
    private $recipeService;

    public function __construct()
    {
        $this->recipeService = new RecipeService();
    }

    public function updateRecipeIngredients(ServerRequestInterface $request, $recipeId)
    {
        $body = json_decode((string) $request->getBody(), true);

        if (!isset($body['newIngredients']) || !is_array($body['newIngredients'])) {
            return new Response(400, ['Content-Type' => 'application/json'], json_encode(['error' => 'Invalid input']));
        }

        return resolve($this->recipeService->updateRecipeIngredients($recipeId, $body['newIngredients']));
    }
}
