<?php
require_once __DIR__ . '/../config/database.php';

class RecipeRepository {
    private $db;

    public function __construct() {
        $this->db = Database::getInstance()->getConnection();
    }

    public function updateRecipeIngredients($id, $newIngredients) {
        $stmt = $this->db->prepare("UPDATE recipes SET ingredients = ? WHERE id = ?");
        $stmt->bind_param("si", json_encode($newIngredients), $id);
        return $stmt->execute();
    }
}
?>
