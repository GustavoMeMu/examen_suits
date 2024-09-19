<?php
require_once "./app/config/dependencias/dependencias.php";
require_once "./app/controller/inicio.php";
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenido</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?=CSS.'index-style.css';?>">
    <link rel="stylesheet" href="<?=CSS.'confetti.css';?>"> 
</head>
<body>
    <div class="container mt-5">
        <h1>¡Bienvenido, <?= htmlspecialchars($_SESSION['usuario']['nombre']); ?>!</h1>
        <!-- Botón para ir a la página de captura de productos -->
        <a href="productos.php" class="btn btn-primary">Capturar Productos</a>
        
        <!-- Botón para cerrar sesión -->
        <a href="cerrar_sesion.php" class="btn btn-danger ml-2">Cerrar Sesión</a>

        <!-- Efecto de confeti -->
        <div class="confetti-container">
            <div class="confetti confetti1"></div>
            <div class="confetti confetti2"></div>
            <div class="confetti confetti3"></div>
            <div class="confetti confetti4"></div>
            <div class="confetti confetti5"></div>
        </div>
    </div>
</body>
</html>
