<?php

require_once 'services/RecipeService.php';

use React\Http\Message\Response;

class DeleteRecipeController
{
    private $recipeService;

    public function __construct()
    {
        $this->recipeService = new RecipeService();
    }

    public function deleteRecipe($recipeId)
    {
        return $this->recipeService->deleteRecipe($recipeId);
    }
}
