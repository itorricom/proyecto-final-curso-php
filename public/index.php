<?php
require '../vendor/autoload.php';

use App\Controllers\LoginController;
use App\Controllers\RegistroController;
use App\Controllers\ProductoController;

session_start();

$action = $_GET['action'] ?? 'index';

if (strpos($action, 'producto') !== false) {
    $controller = new ProductoController();
} elseif ($action === 'registro' || $action === 'registrar') {
    $controller = new RegistroController();
} else {
    $controller = new LoginController();
}

// Obtener el ID si está presente en la URL
$id = $_GET['id'] ?? null;

if (method_exists($controller, $action)) {
    // Pasar el ID como argumento si la acción lo requiere
    if (($action === 'editar_producto' || $action === 'eliminar_producto') && $id !== null) {
        $controller->$action($id); // Pasar el ID al método
    } else {
        $controller->$action();
    }
} else {
    echo "Página no encontrada";
}
?>