<?php
namespace App\Core;

use PDO;
use PDOException;

class Database {
    private static $connection;

    public static function getConnection() {
        if (!isset(self::$connection)) {
            try {
                self::$connection = new PDO("mysql:host=localhost;dbname=inventario", "root", "");
                self::$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $e) {
                die("Error de conexión: " . $e->getMessage());
            }
        }
        return self::$connection;
    }
}
