<?php
require_once __DIR__ . '/../repositories/RecipeRepository.php';

class RecipeService {
    private $recipeRepository;

    public function __construct() {
        $this->recipeRepository = new RecipeRepository();
    }

    public function getRecipeById($id) {
        return $this->recipeRepository->getRecipeById($id);
    }
}
?>
