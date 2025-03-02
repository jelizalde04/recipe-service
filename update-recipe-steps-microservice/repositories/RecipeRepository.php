<?php
require_once __DIR__ . '/../config/database.php';

class RecipeRepository {
    private $db;

    public function __construct() {
        $this->db = Database::getInstance()->getConnection();
    }

    public function updateRecipeSteps($id, $newSteps) {
        $stmt = $this->db->prepare("UPDATE recipes SET steps = ? WHERE id = ?");
        $stmt->bind_param("si", json_encode($newSteps), $id);
        return $stmt->execute();
    }
}
?>
