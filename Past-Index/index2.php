<?php
    require_once "./app/config/dependencias/dependencias.php";
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="<?=CSS.'style.css';?>">
    <link rel="stylesheet" href="<?=CSS.'bootstrap.min.css';?>">
    <link rel="stylesheet" href="<?=CSS.'sweetalert.css';?>">
    <script src="<?=JS.'app.js'?>"></script>
    <script src="<?=JS.'bootstrap.bundle.min.js'?>"></script>
    <script src="<?=JS.'sweetalert.min.js'?>"></script>

    <title>Formulario</title>
</head>
<body>
<form class="container" action="vista-datos.php" method="POST">
    <div class="row justify-content-center">
        <div class="col-5">
            <label for="">Nombre</label><br>
        <input class="form-control mb-3" name="nombre" type="text">
            <label for="">Apellido</label><br>
        <input class="form-control mb-3" name="apellido" type="text">
            <label for="">Telefono</label><br>
        <input class="form-control mb-3" name="telefono" type="text">
        <button class="btn btn-primary w-100" type="submit">Registrar</button>
        </div>
    </div>
</form>
</body>
</html>
