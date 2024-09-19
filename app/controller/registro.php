<?php
session_start();

if (isset($_SESSION['usuario'])) {
    header("Location: index.php");
    exit();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (!empty($_POST['nombre']) && !empty($_POST['apellido']) && !empty($_POST['email']) && !empty($_POST['password'])) {
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        // Guardar datos del usuario en la sesión
        $_SESSION['registro'] = [
            "nombre" => $nombre,
            "apellido" => $apellido,
            "email" => $email,
            "password" => $password
        ];

        header("Location: login.php");
        exit();
    } else {
        $error = 'Todos los campos son obligatorios.';
    }
}
?>
