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
            new Recipe("1", "Spaghetti Carbonara", "user1", ["Spaghetti", "Eggs", "Bacon"], ["Boil pasta", "Fry bacon", "Mix with eggs and cheese"]),
            new Recipe("2", "Chocolate Cake", "user2", ["Flour", "Sugar", "Cocoa Powder"], ["Mix ingredients", "Bake for 30 minutes"]),
            new Recipe("3", "Pancakes", "user1", ["Flour", "Milk", "Eggs", "Sugar"], ["Mix all ingredients", "Fry on pan"]),
        ];
    }

    public function getUserRecipes($userId)
    {
        $userRecipes = array_filter($this->recipes, function ($recipe) use ($userId) {
            return $recipe->userId === $userId;
        });

        return new Response(
            200,
            ['Content-Type' => 'application/json'],
            json_encode(['recipes' => array_values($userRecipes)])
        );
    }
}
