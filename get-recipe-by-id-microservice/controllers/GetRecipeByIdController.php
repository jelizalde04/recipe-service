<?php
require_once __DIR__ . '/../services/RecipeService.php';
require_once __DIR__ . '/../middlewares/AuthMiddleware.php';

class GetRecipeByIdController {
    private $recipeService;

    public function __construct() {
        $this->recipeService = new RecipeService();
    }

    public function getRecipeById() {
        $headers = getallheaders();
        if (!isset($headers['Authorization'])) {
            http_response_code(401);
            echo json_encode(["message" => "Unauthorized"]);
            return;
        }

        try {
            $token = str_replace("Bearer ", "", $headers['Authorization']);
            $decoded = AuthMiddleware::verifyJWT($token);

            if (!isset($_GET['id'])) {
                http_response_code(400);
                echo json_encode(["message" => "Recipe ID is required"]);
                return;
            }

            $id = intval($_GET['id']);
            $recipe = $this->recipeService->getRecipeById($id);

            if ($recipe) {
                http_response_code(200);
                echo json_encode($recipe);
            } else {
                http_response_code(404);
                echo json_encode(["message" => "Recipe not found"]);
            }
        } catch (Exception $e) {
            http_response_code(401);
            echo json_encode(["message" => "Invalid token"]);
        }
    }
}
?>
