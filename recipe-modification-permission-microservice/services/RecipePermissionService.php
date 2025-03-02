<?php
require_once __DIR__ . '/../repositories/RecipeRepository.php';

class RecipePermissionService {
    private $recipeRepository;

    public function __construct() {
        $this->recipeRepository = new RecipeRepository();
    }

    public function checkRecipePermission($userId, $recipeId) {
        $ownerId = $this->recipeRepository->getRecipeOwner($recipeId);
        return $ownerId === $userId;
    }
}
?>
