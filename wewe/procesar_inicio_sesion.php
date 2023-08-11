<?php
$servername = "localhost";
$dbname = "datosBanco";

$conn = mysqli_connect("localhost","root", "", $dbname);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuarioValido = "gaston";  // Cambia esto por el usuario válido
    $contrasenaValida = "123";  // Cambia esto por la contraseña válida

    $usuarioIngresado = $_POST["usuario"];
    $contrasenaIngresada = $_POST["contrasena"];

    if ($usuarioIngresado === $usuarioValido && $contrasenaIngresada === $contrasenaValida) {
        // Las credenciales son válidas, redirigir a la página del usuario
        header("Location: caja.html");
        exit;
    } else {
        // Las credenciales son inválidas, mostrar un mensaje de error
        echo "Usuario o contraseña incorrectos.";
    }
}
?>
