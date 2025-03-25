# Sistema de Gestión de Inventario

Este proyecto es un **Sistema de Gestión de Inventario** desarrollado en PHP con funcionalidades de **Login** y **CRUD** (Crear, Leer, Actualizar y Eliminar) para la gestión de productos. El sistema utiliza **Composer** para la gestión de dependencias y sigue buenas prácticas de programación.

## Características Principales

- **Login de Usuarios**: Autenticación segura de usuarios con cifrado de contraseñas.
- **CRUD de Productos**: Permite crear, leer, actualizar y eliminar productos en el inventario.
- **Uso de Composer**: Gestión de dependencias y autoloading de clases.
- **Bootstrap**: Diseño responsivo y moderno para una mejor experiencia de usuario.

## Requisitos del Sistema

- PHP >= 7.4
- MySQL
- Composer
- Servidor web (Apache, Nginx, etc.)

## Instalación

Sigue estos pasos para clonar y desplegar el proyecto en tu entorno local.

### 1. Clonar el Repositorio

Clona el repositorio desde GitHub:

```bash
git clone https://github.com/tu-usuario/proyecto-final.git
cd proyecto-final

2. Instalar Dependencias
Instala las dependencias del proyecto usando Composer:

composer install

3. Configurar la Base de Datos
Crea una base de datos en MySQL llamada inventario.

Importa la estructura de la base de datos desde el archivo database.sql ubicado en la raíz del proyecto.

4. Configurar el Archivo de Conexión
Edita el archivo app/core/Database.php y actualiza las credenciales de la base de datos:

private $host = 'localhost';
private $db_name = 'inventario';
private $username = 'root'; // Usuario de la base de datos
private $password = ''; // Contraseña de la base de datos

5. Desplegar el Proyecto
Coloca el proyecto en la carpeta de tu servidor web (por ejemplo, htdocs en XAMPP).

Accede al proyecto desde tu navegador:
http://localhost/proyecto-final/public/

