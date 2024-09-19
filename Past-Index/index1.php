<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="public/css/style-calculadora.css">
    <title>Calculadora PHP</title>
</head>
<body>
<div class="titulo">
    <h2>Calculadora</h2>
</div>

<?php
$resultado = '';
$error = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $num1 = filter_var($_POST['numero1'], FILTER_VALIDATE_FLOAT);
    $num2 = filter_var($_POST['numero2'], FILTER_VALIDATE_FLOAT);
    $operacion = $_POST['operacion'];

    if ($num1 === false || $num2 === false) {
        $error = "Por favor ingresa números válidos.";
    } elseif ($operacion == 'division' && $num2 == 0) {
        $error = "No se puede dividir entre cero.";
    } else {
        switch ($operacion) {
            case 'suma':
                $resultado = $num1 + $num2;
                break;
            case 'resta':
                $resultado = $num1 - $num2;
                break;
            case 'multiplicacion':
                $resultado = $num1 * $num2;
                break;
            case 'division':
                $resultado = $num1 / $num2;
                break;
            default:
                $error = "Selecciona una operación válida.";
                break;
        }
    }
}
?>

<form action="index1.php" method="POST" id="calculadora-form">
    <div class="input-group mb-3" id="numero1">
        <span class="input-group-text">Número 1</span>
        <input name="numero1" type="text" class="form-control" required value="<?php echo isset($_POST['numero1']) ? $_POST['numero1'] : ''; ?>">
    </div>

    <div class="input-group mb-3" id="numero2">
        <span class="input-group-text">Número 2</span>
        <input name="numero2" type="text" class="form-control" required value="<?php echo isset($_POST['numero2']) ? $_POST['numero2'] : ''; ?>">
    </div>

    <div class="input-group mb-3" id="operacion">
        <span class="input-group-text">Operación</span>
        <select name="operacion" class="form-control" required>
            <option value="">Selecciona una operación</option>
            <option value="suma" <?php echo (isset($_POST['operacion']) && $_POST['operacion'] == 'suma') ? 'selected' : ''; ?>>Suma (+)</option>
            <option value="resta" <?php echo (isset($_POST['operacion']) && $_POST['operacion'] == 'resta') ? 'selected' : ''; ?>>Resta (-)</option>
            <option value="multiplicacion" <?php echo (isset($_POST['operacion']) && $_POST['operacion'] == 'multiplicacion') ? 'selected' : ''; ?>>Multiplicación (*)</option>
            <option value="division" <?php echo (isset($_POST['operacion']) && $_POST['operacion'] == 'division') ? 'selected' : ''; ?>>División (/)</option>
        </select>
    </div>

    <button type="submit" class="btn btn-primary" id="calcular">Calcular</button>
</form>

<div id="resultado" data-result="<?php echo $resultado; ?>" data-error="<?php echo $error; ?>"></div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const resultadoElement = document.getElementById('resultado');
    const resultado = resultadoElement.getAttribute('data-result');
    const error = resultadoElement.getAttribute('data-error');

    if (resultado) {
        Swal.fire({
            title: 'Resultado',
            text: `El resultado de la operación es: ${resultado}`,
            icon: 'success',
            timer: 5000,
            timerProgressBar: true
        });
    } else if (error) {
        Swal.fire({
            icon: 'error',
            text: error,
            timer: 5000,
            timerProgressBar: true
        });
    }
});
</script>
</body>
</html>
