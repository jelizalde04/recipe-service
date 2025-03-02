<?php
require_once __DIR__ . '/../config/database.php';

class RecipeRepository {
    private $db;

    public function __construct() {
        $this->db = Database::getInstance()->getConnection();
    }

    public function createRecipe($recipe) {
        $stmt = $this->db->prepare("INSERT INTO recipes (name, ingredients, steps, created_at) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssss", $recipe->name, json_encode($recipe->ingredients), json_encode($recipe->steps), $recipe->created_at);
        return $stmt->execute();
    }
}
?>
