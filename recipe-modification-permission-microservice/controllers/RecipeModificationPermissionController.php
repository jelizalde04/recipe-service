<?php
require_once __DIR__ . '/../services/RecipePermissionService.php';
require_once __DIR__ . '/../middlewares/AuthMiddleware.php';

class RecipePermissionController {
    private $recipePermissionService;

    public function __construct() {
        $this->recipePermissionService = new RecipePermissionService();
    }

    public function checkPermission() {
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

            if (!isset($_GET['recipe_id'])) {
                http_response_code(400);
                echo json_encode(["message" => "Recipe ID is required"]);
                return;
            }

            $recipeId = intval($_GET['recipe_id']);
            $hasPermission = $this->recipePermissionService->checkRecipePermission($userId, $recipeId);

            http_response_code(200);
            echo json_encode(["has_permission" => $hasPermission]);
        } catch (Exception $e) {
            http_response_code(401);
            echo json_encode(["message" => "Invalid token"]);
        }
    }
}
?>
