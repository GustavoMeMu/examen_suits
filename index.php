<?php
    require_once "./app/config/dependencias/dependencias.php";
    session_start();
    require_once "./app/controller/inicio.php"
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?=CSS.'index-style.css';?>">
    <link rel="stylesheet" href="<?=CSS.'confetti.css';?>"> <!-- Agrega esta línea -->
</head>
<body>
    <h1>Bienvenido</h1>
    <p><?=$_SESSION['usuario']['nombre']?> </p>
    
    <a href="cerrar_sesion.php" class="btn btn-dark btn-lg">Cerrar Sesión</a>

    <!-- Contenedor de confeti -->
    <div class="confetti-container">
        <!-- Confeti individual -->
        <div class="confetti confetti1"></div>
        <div class="confetti confetti2"></div>
        <div class="confetti confetti3"></div>
        <div class="confetti confetti4"></div>
        <div class="confetti confetti5"></div>
    </div>
</body>
</html>
    