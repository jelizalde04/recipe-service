<?php

require_once 'models/Recipe.php';

use React\Http\Message\Response;

class RecipeService
{
    private $recipes = [];

    public function __construct()
    {
        // Datos simulados (se podrían conectar a una base de datos)
        $this->recipes = [
            new Recipe("1", "Spaghetti Carbonara", ["Spaghetti", "Eggs", "Bacon"], ["Boil pasta", "Fry bacon", "Mix with eggs and cheese"]),
            new Recipe("2", "Chocolate Cake", ["Flour", "Sugar", "Cocoa Powder"], ["Mix ingredients", "Bake for 30 minutes"]),
        ];
    }

    public function deleteRecipe($recipeId)
    {
        foreach ($this->recipes as $index => $recipe) {
            if ($recipe->id === $recipeId) {
                array_splice($this->recipes, $index, 1);
                return new Response(
                    200,
                    ['Content-Type' => 'application/json'],
                    json_encode(['message' => 'Recipe deleted successfully'])
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
