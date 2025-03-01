<?php

require_once 'services/RecipeService.php';

use React\Http\Message\Response;

class ListAllRecipesController
{
    private $recipeService;

    public function __construct()
    {
        $this->recipeService = new RecipeService();
    }

    public function listAllRecipes()
    {
        return $this->recipeService->getAllRecipes();
    }
}
