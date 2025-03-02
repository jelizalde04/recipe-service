<?php
require_once __DIR__ . '/../config/database.php';

class RecipeRepository {
    private $db;

    public function __construct() {
        $this->db = Database::getInstance()->getConnection();
    }

    public function getRecipeOwner($recipeId) {
        $stmt = $this->db->prepare("SELECT user_id FROM recipes WHERE id = ?");
        $stmt->bind_param("i", $recipeId);
        $stmt->execute();
        $result = $stmt->get_result();
        $recipe = $result->fetch_assoc();

        return $recipe ? $recipe['user_id'] : null;
    }
}
?>
