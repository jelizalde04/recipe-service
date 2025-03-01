<?php

require_once 'models/Recipe.php';

use React\Promise\Promise;
use React\Http\Message\Response;

class RecipeService
{
    private $recipes = [];

    public function createRecipe($data)
    {
        $recipe = new Recipe($data['name'], $data['ingredients'], $data['steps']);
        $this->recipes[] = $recipe;

        return new Response(
            201,
            ['Content-Type' => 'application/json'],
            json_encode(['message' => 'Recipe created successfully', 'recipe' => $recipe])
        );
    }
}
