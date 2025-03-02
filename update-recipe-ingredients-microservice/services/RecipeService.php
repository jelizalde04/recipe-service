<?php
require_once __DIR__ . '/../repositories/RecipeRepository.php';

class RecipeService {
    private $recipeRepository;

    public function __construct() {
        $this->recipeRepository = new RecipeRepository();
    }

    public function updateRecipeIngredients($id, $newIngredients) {
        return $this->recipeRepository->updateRecipeIngredients($id, $newIngredients);
    }
}
?>
