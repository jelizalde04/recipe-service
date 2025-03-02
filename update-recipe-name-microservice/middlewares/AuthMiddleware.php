<?php
require_once __DIR__ . '/../utils/JWTHandler.php';

class AuthMiddleware {
    public static function verifyJWT($token) {
        return JWTHandler::decode($token);
    }
}
?>
