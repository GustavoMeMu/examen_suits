<?php
// $nom = $_POST['nombre'];
$email = $_POST['email'];
$pass = $_POST['loginPassword'];
echo json_encode("Hola bienbenido tu email es : ".$email . " y tu contraseña es : ".$pass);
//encode sirve para cambiar lo datos a tó Json

?>