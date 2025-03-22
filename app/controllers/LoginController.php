<?php
namespace App\Controllers;

use App\Models\UsuarioModel;

class LoginController {
    private $model;

    public function __construct() {
        $this->model = new UsuarioModel();
    }

    public function index() {
        include __DIR__ . '/../views/auth/login.php';
    }

    public function login() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $email = $_POST['email'];
            $password = $_POST['password'];
            $usuario = $this->model->getUsuarioByEmail($email);
    
            if ($usuario && password_verify($password, $usuario['password'])) {
                // Elimina esta línea:
                // session_start();
    
                $_SESSION['usuario'] = $usuario;
                header('Location: /proyecto-final/public/index.php?action=listar_productos');
            } else {
                echo "Credenciales incorrectas";
            }
        } else {
            $this->index(); // Mostrar el formulario de login si no es una solicitud POST
        }
    }
}