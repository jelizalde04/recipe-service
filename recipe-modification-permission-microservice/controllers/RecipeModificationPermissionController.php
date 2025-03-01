<?php

require_once 'services/RecipeService.php';

use React\Http\Message\Response;

class RecipeModificationPermissionController
{
    private $recipeService;

    public function __construct()
    {
        $this->recipeService = new RecipeService();
    }

    public function checkPermission($userId, $recipeId)
    {
        return $this->recipeService->checkModificationPermission($userId, $recipeId);
    }
}
