<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión</title>
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
    <div class="container">
        <img src="img/Logo Omnisalud-02.png" alt="Logo de la empresa" style="height: 170px;">
        <h2>Iniciar Sesión</h2>
        <!-- Formulario de inicio de sesión -->
        <form action="process.php" method="post">
            <div class="form-group">
                <input type="text" id="usuario" name="usuario" required   placeholder="Usuario">
            </div>
            <div class="form-group">
                <input type="password" id="contraseña" name="contraseña" required  placeholder="contraseña">
            </div>
            <button type="submit">Iniciar Sesión</button>
        </form>
    </div>

    <script src="js/login.js"></script>

</body>
</html>

