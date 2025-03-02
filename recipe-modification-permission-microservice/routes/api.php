<?php
require_once __DIR__ . '/../controllers/RecipePermissionController.php';

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json");

$method = $_SERVER['REQUEST_METHOD'];

if ($method === 'GET') {
    $controller = new RecipePermissionController();
    $controller->checkPermission();
} else {
    http_response_code(405);
    echo json_encode(["message" => "Method Not Allowed"]);
}
?>
