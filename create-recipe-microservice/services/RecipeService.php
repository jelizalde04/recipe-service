<?php
require_once __DIR__ . '/../repositories/RecipeRepository.php';

class RecipeService {
    private $recipeRepository;

    public function __construct() {
        $this->recipeRepository = new RecipeRepository();
    }

    public function createRecipe($name, $ingredients, $steps) {
        $recipe = new Recipe($name, $ingredients, $steps);
        return $this->recipeRepository->createRecipe($recipe);
    }
}
?>
