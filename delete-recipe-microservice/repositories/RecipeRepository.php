<?php
require_once __DIR__ . '/../config/database.php';

class RecipeRepository {
    private $db;

    public function __construct() {
        $this->db = Database::getInstance()->getConnection();
    }

    public function deleteRecipe($id) {
        $stmt = $this->db->prepare("DELETE FROM recipes WHERE id = ?");
        $stmt->bind_param("i", $id);
        return $stmt->execute();
    }
}
?>
