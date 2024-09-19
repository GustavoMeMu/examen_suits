<?php
    require_once "./app/config/dependencias.php";
    require_once "./app/controller/registro.php";
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?=CSS.'style.css'?>">
    <script src="<?=JS."app.js"?>"></script>
    <title>SUITS</title>
</head>
<body>
    <form class="container mt-5" action="vista-datos.php" method="POST">
        <div class="row justify-content-center">
            <div class="col-5">
                <p><?=$nombre?></p>
                <p><?=$apellido?></p>
                <p><?=$correo?></p>
                <p><?=$pass?></p>
                <a href="index.php">regresar</a>
            </div>
        </div>
    </form>  
</body>
</html>
