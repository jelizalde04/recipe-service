<?php

require_once 'services/RecipeService.php';

use React\Http\Message\Response;

class ListUserRecipesController
{
    private $recipeService;

    public function __construct()
    {
        $this->recipeService = new RecipeService();
    }

    public function listUserRecipes($userId)
    {
        return $this->recipeService->getUserRecipes($userId);
    }
}
