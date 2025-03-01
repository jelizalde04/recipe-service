<?php

require_once 'models/Recipe.php';

use React\Http\Message\Response;

class RecipeService
{
    private $recipes = [];

    public function updateRecipeSteps($recipeId, $newSteps)
    {
        foreach ($this->recipes as $recipe) {
            if ($recipe->id === $recipeId) {
                $recipe->steps = $newSteps;
                return new Response(
                    200,
                    ['Content-Type' => 'application/json'],
                    json_encode(['message' => 'Recipe steps updated successfully', 'recipe' => $recipe])
                );
            }
        }

        return new Response(
            404,
            ['Content-Type' => 'application/json'],
            json_encode(['error' => 'Recipe not found'])
        );
    }
}
