<?php
namespace App\Controllers;

use App\Models\ProductoModel;

class ProductoController {
    private $model;

    public function __construct() {
        $this->model = new ProductoModel();
    }

    public function listar_productos() {
        $productos = $this->model->getAll();
        include __DIR__ . '/../views/productos/listar.php';
    }

    public function crear_producto() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $nombre = $_POST['nombre'];
            $descripcion = $_POST['descripcion'];
            $precio = $_POST['precio'];
            $stock = $_POST['stock'];

            $this->model->crear($nombre, $descripcion, $precio, $stock);
            header('Location: /proyecto-final/public/index.php?action=listar_productos');
        } else {
            include __DIR__ . '/../views/productos/crear.php';
        }
    }

    public function editar_producto($id) {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Procesar el formulario de edición
            $nombre = $_POST['nombre'];
            $descripcion = $_POST['descripcion'];
            $precio = $_POST['precio'];
            $stock = $_POST['stock'];
    
            $this->model->actualizar($id, $nombre, $descripcion, $precio, $stock);
            header('Location: /proyecto-final/public/index.php?action=listar_productos');
        } else {
            // Mostrar el formulario de edición
            $producto = $this->model->getById($id);
            include __DIR__ . '/../views/productos/editar.php';
        }
    }

    public function eliminar_producto($id) {
        $this->model->eliminar($id);
        header('Location: /proyecto-final/public/index.php?action=listar_productos');
    }
}