<?php
require_once __DIR__ . '/../vendor/autoload.php';
use Firebase\JWT\JWT;
use Firebase\JWT\Key;

class JWTHandler {
    private static $secret = 'your_jwt_secret';

    public static function encode($payload) {
        return JWT::encode($payload, self::$secret, 'HS256');
    }

    public static function decode($token) {
        return JWT::decode($token, new Key(self::$secret, 'HS256'));
    }
}
?>
