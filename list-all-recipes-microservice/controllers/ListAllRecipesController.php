<?php
require_once __DIR__ . '/../services/RecipeService.php';
require_once __DIR__ . '/../middlewares/AuthMiddleware.php';

class ListAllRecipesController {
    private $recipeService;

    public function __construct() {
        $this->recipeService = new RecipeService();
    }

    public function listAllRecipes() {
        $headers = getallheaders();
        if (!isset($headers['Authorization'])) {
            http_response_code(401);
            echo json_encode(["message" => "Unauthorized"]);
            return;
        }

        try {
            $token = str_replace("Bearer ", "", $headers['Authorization']);
            $decoded = AuthMiddleware::verifyJWT($token);

            $recipes = $this->recipeService->listAllRecipes();

            http_response_code(200);
            echo json_encode($recipes);
        } catch (Exception $e) {
            http_response_code(401);
            echo json_encode(["message" => "Invalid token"]);
        }
    }
}
?>
