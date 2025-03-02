<?php
require_once __DIR__ . '/../controllers/UpdateRecipeIngredientsController.php';

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json");

$method = $_SERVER['REQUEST_METHOD'];

if ($method === 'PUT') {
    $controller = new UpdateRecipeIngredientsController();
    $controller->updateRecipeIngredients();
} else {
    http_response_code(405);
    echo json_encode(["message" => "Method Not Allowed"]);
}
?>
