<?php
require_once __DIR__ . '/../config/database.php';

class RecipeRepository {
    private $db;

    public function __construct() {
        $this->db = Database::getInstance()->getConnection();
    }

    public function listAllRecipes() {
        $stmt = $this->db->prepare("SELECT * FROM recipes");
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
