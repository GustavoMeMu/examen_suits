<?php
session_start();

if (isset($_POST['email']) && !empty($_POST['email']) && isset($_POST['loginPassword']) && !empty($_POST['loginPassword'])) {
    if ($_SESSION['registro']['email'] == $_POST['email']) {
        if ($_SESSION['registro']['password'] == $_POST['loginPassword']) {
            $_SESSION['usuario'] = $_SESSION['registro'];
            echo json_encode([1, "¡Hola, " . $_SESSION['usuario']['nombre'] . "! Bienvenido."]);
        } else {
            echo json_encode([0, "¡Contraseña incorrecta!"]);
        }
    } else {
        echo json_encode([0, "¡Correo electrónico incorrecto!"]);
    }
} else {
    echo json_encode([0, "Por favor, llena todos los campos."]);
}
?>
