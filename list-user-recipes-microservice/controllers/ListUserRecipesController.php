<?php
require_once __DIR__ . '/../services/RecipeService.php';
require_once __DIR__ . '/../middlewares/AuthMiddleware.php';

class ListUserRecipesController {
    private $recipeService;

    public function __construct() {
        $this->recipeService = new RecipeService();
    }

    public function listUserRecipes() {
        $headers = getallheaders();
        if (!isset($headers['Authorization'])) {
            http_response_code(401);
            echo json_encode(["message" => "Unauthorized"]);
            return;
        }

        try {
            $token = str_replace("Bearer ", "", $headers['Authorization']);
            $decoded = AuthMiddleware::verifyJWT($token);
            $userId = $decoded->user_id;

            $recipes = $this->recipeService->listUserRecipes($userId);

            http_response_code(200);
            echo json_encode($recipes);
        } catch (Exception $e) {
            http_response_code(401);
            echo json_encode(["message" => "Invalid token"]);
        }
    }
}
?>
