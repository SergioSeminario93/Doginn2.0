<?php
// Inicia o reanuda la sesión de PHP para trabajar con variables de sesión
session_start();

// Destruye toda la información registrada de una sesión
session_destroy();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cierre de Sesión</title>
    <!-- Enlaza a un archivo CSS específico para la página de cierre de sesión -->
    <link rel="stylesheet" href="css/cerrar_sesion.css"> <!-- Ajusta la ruta según tu estructura de archivos -->
</head>
<body>
    <!-- Contenedor principal de la página -->
    <div class="container">
        <!-- Encabezado principal -->
        <h1>¡Hasta pronto!</h1>
        <!-- Mensaje indicando que la sesión se ha cerrado exitosamente -->
        <p>Has cerrado sesión exitosamente. Esperamos verte de nuevo pronto.</p>
        <!-- Enlace para redirigir a la página de inicio de sesión nuevamente -->
        <a href="login.php">Iniciar sesión nuevamente</a>
    </div>
</body>
</html>
