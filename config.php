<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "usuarios";

// Crear conexión
$mysqli = new mysqli($servername, $username, $password, $database);

// Verificar la conexión
if ($mysqli->connect_error) {
    die("Conexión fallida: " . $mysqli->connect_error);
}
echo "";
?>
