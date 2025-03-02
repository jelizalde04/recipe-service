<?php
require_once __DIR__ . '/../config/database.php';

class RecipeRepository {
    private $db;

    public function __construct() {
        $this->db = Database::getInstance()->getConnection();
    }

    public function updateRecipeName($id, $newName) {
        $stmt = $this->db->prepare("UPDATE recipes SET name = ? WHERE id = ?");
        $stmt->bind_param("si", $newName, $id);
        return $stmt->execute();
    }
}
?>
