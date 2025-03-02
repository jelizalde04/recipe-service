<?php
require_once __DIR__ . '/../config/database.php';

class RecipeRepository {
    private $db;

    public function __construct() {
        $this->db = Database::getInstance()->getConnection();
    }

    public function listUserRecipes($userId) {
        $stmt = $this->db->prepare("SELECT * FROM recipes WHERE user_id = ?");
        $stmt->bind_param("i", $userId);
        $stmt->execute();
        $result = $stmt->get_result();
        $recipes = [];

        while ($row = $result->fetch_assoc()) {
            $recipes[] = $row;
        }

        return $recipes;
    }
}
?>
