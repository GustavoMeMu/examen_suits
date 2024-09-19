<?php
session_start();

if (!isset($_SESSION['usuario'])) {
    header("Location: login.php");
    exit();
}

if (!isset($_SESSION['productos'])) {
    $_SESSION['productos'] = [];
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $producto = $_POST['producto'];
    $precio = $_POST['precio'];

    if (!empty($producto) && is_numeric($precio) && $precio > 0) {
        $_SESSION['productos'][] = ['producto' => $producto, 'precio' => $precio];
    } else {
        $error = 'Debes ingresar un producto y un precio válido.';
    }
}
?>
