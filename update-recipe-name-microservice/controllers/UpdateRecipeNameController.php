<?php
require_once __DIR__ . '/../services/RecipeService.php';
require_once __DIR__ . '/../middlewares/AuthMiddleware.php';

class UpdateRecipeNameController {
    private $recipeService;

    public function __construct() {
        $this->recipeService = new RecipeService();
    }

    public function updateRecipeName() {
        $headers = getallheaders();
        if (!isset($headers['Authorization'])) {
            http_response_code(401);
            echo json_encode(["message" => "Unauthorized"]);
            return;
        }

        try {
            $token = str_replace("Bearer ", "", $headers['Authorization']);
            $decoded = AuthMiddleware::verifyJWT($token);

            $data = json_decode(file_get_contents("php://input"), true);
            if (!$data || !isset($data['id']) || !isset($data['name'])) {
                http_response_code(400);
                echo json_encode(["message" => "Invalid request"]);
                return;
            }

            $result = $this->recipeService->updateRecipeName($data['id'], $data['name']);
            if ($result) {
                http_response_code(200);
                echo json_encode(["message" => "Recipe name updated successfully"]);
            } else {
                http_response_code(500);
                echo json_encode(["message" => "Internal Server Error"]);
            }
        } catch (Exception $e) {
            http_response_code(401);
            echo json_encode(["message" => "Invalid token"]);
        }
    }
}
?>
