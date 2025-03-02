<?php
require_once __DIR__ . '/../repositories/RecipeRepository.php';

class RecipeService {
    private $recipeRepository;

    public function __construct() {
        $this->recipeRepository = new RecipeRepository();
    }

    public function updateRecipeName($id, $newName) {
        return $this->recipeRepository->updateRecipeName($id, $newName);
    }
}
?>
