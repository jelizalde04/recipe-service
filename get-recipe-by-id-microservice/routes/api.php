<?php
require_once __DIR__ . '/../controllers/GetRecipeByIdController.php';

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json");

$method = $_SERVER['REQUEST_METHOD'];

if ($method === 'GET') {
    $controller = new GetRecipeByIdController();
    $controller->getRecipeById();
} else {
    http_response_code(405);
    echo json_encode(["message" => "Method Not Allowed"]);
}
?>
