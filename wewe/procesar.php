<?php


$servername = "localhost";
$dbname = "datosBanco";

// Crear conexión
$conn = mysqli_connect("localhost","root", "", $dbname);
// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $saldo = intval($_POST['saldo']);

    // Insertar el monto en la tabla 'montos'
    $insert_query = "INSERT INTO caja (id_caja, saldo) VALUES (NULL, $saldo)";
    if ($conn->query($insert_query) === TRUE) {
        echo "saldo registrado correctamente.";
    } else {
        echo "Error al registrar el saldo: " . $conn->error;
    }
}

// Cerrar la conexión
$conn->close();
?>









