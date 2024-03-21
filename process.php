<?php
require_once "config.php";

// Obtener los datos del formulario de inicio de sesión
$nombre_usuario = $_POST['usuario'];
$contraseña = $_POST['contraseña'];

// Prevenir la inyección SQL y escapar los datos
$nombre_usuario = mysqli_real_escape_string($mysqli, $nombre_usuario);
$contraseña = mysqli_real_escape_string($mysqli, $contraseña);

// Consulta preparada para evitar la inyección de SQL
$query = "SELECT * FROM registro WHERE nombre_usuario = ? AND contraseña = ?";
$stmt = $mysqli->prepare($query);
$stmt->bind_param("ss", $nombre_usuario, $contraseña);
$stmt->execute();
$result = $stmt->get_result();

// Verificar si se encontraron filas
if ($result->num_rows > 0) {
    // Usuario autenticado correctamente
    $row = $result->fetch_assoc();
    echo "¡Inicio de sesión exitoso! Bienvenido " . $row['nombre_usuario'];
    
    // Redireccionar a la página de gestión del talento humano
    header("Location: gestion_talento_humano.html");
    exit(); // Asegura que no se ejecute más código después de la redirección
} else {
    // Error de inicio de sesión
    echo "¡Error al iniciar sesión!";
}

// Cerrar la consulta preparada
$stmt->close();

?>
