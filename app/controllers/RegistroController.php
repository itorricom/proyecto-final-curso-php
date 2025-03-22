<?php
namespace App\Controllers;

use App\Models\UsuarioModel;

class RegistroController {
    private $model;

    public function __construct() {
        $this->model = new UsuarioModel();
    }

    public function registro() {
        include __DIR__ . '/../views/auth/registro.php';
    }

    public function registrar() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $nombre = $_POST['nombre'];
            $email = $_POST['email'];
            $password = $_POST['password'];
    
            // Cifrar la contraseña
            $hash = password_hash($password, PASSWORD_BCRYPT);
    
            // Guardar el usuario en la base de datos
            $this->model->crearUsuario($nombre, $email, $hash);
    
            // Elimina esta línea:
            // session_start();
    
            $_SESSION['mensaje'] = "¡Registro exitoso! Por favor, inicia sesión.";
    
            // Redirigir al login después del registro
            header('Location: /proyecto-final/public/index.php?action=login');
            exit();
        }
    }
}