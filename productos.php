<?php
require_once "./app/config/dependencias/dependencias.php";
require_once "./app/controller/productos.php";
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Captura de Productos</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?=CSS.'index-style.css';?>">
    <link rel="stylesheet" href="<?=CSS.'confetti.css';?>"> 
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center">Captura de Productos</h1>

        <?php if (isset($error)): ?>
            <div class="alert alert-danger text-center"><?= htmlspecialchars($error); ?></div>
        <?php endif; ?>

        <form action="productos.php" method="post">
            <div class="form-group">
                <label for="producto">Nombre del producto:</label>
                <input type="text" class="form-control" id="producto" name="producto" required>
            </div>
            <div class="form-group">
                <label for="precio">Precio:</label>
                <input type="number" class="form-control" id="precio" name="precio" step="0.01" required>
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-primary">Agregar Producto</button>
            </div>
        </form>

        <h2 class="mt-5">Listado de Productos</h2>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Producto</th>
                    <th>Precio</th>
                </tr>
            </thead>
            <tbody>
                <?php if (!empty($_SESSION['productos'])): ?>
                    <?php foreach ($_SESSION['productos'] as $item): ?>
                        <tr>
                            <td><?= htmlspecialchars($item['producto']); ?></td>
                            <td><?= htmlspecialchars($item['precio']); ?></td>
                        </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="2" class="text-center">No hay productos añadidos.</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>

        <a href="cerrar_sesion.php" class="btn btn-danger">Cerrar Sesión</a>
    </div>
</body>
</html>
