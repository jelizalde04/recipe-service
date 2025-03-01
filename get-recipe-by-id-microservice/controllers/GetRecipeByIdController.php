<?php

require_once 'services/RecipeService.php';

use React\Http\Message\Response;

class GetRecipeByIdController
{
    private $recipeService;

    public function __construct()
    {
        $this->recipeService = new RecipeService();
    }

    public function getRecipeById($recipeId)
    {
        return $this->recipeService->getRecipeById($recipeId);
    }
}
