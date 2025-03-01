<?php

require_once 'services/RecipeService.php';

use Psr\Http\Message\ServerRequestInterface;
use React\Http\Message\Response;
use function React\Promise\resolve;

class UpdateRecipeStepsController
{
    private $recipeService;

    public function __construct()
    {
        $this->recipeService = new RecipeService();
    }

    public function updateRecipeSteps(ServerRequestInterface $request, $recipeId)
    {
        $body = json_decode((string) $request->getBody(), true);

        if (!isset($body['newSteps']) || !is_array($body['newSteps'])) {
            return new Response(400, ['Content-Type' => 'application/json'], json_encode(['error' => 'Invalid input']));
        }

        return resolve($this->recipeService->updateRecipeSteps($recipeId, $body['newSteps']));
    }
}
