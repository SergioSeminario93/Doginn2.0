<?php
// Inicia la sesión de PHP, permitiendo el uso de variables de sesión
session_start();

// Verifica si el usuario está autenticado
if (!isset($_SESSION['usuario_id']) || empty($_SESSION['usuario_id'])) {
    // Si no está autenticado, redirige al usuario al inicio de sesión
    header("Location: login.php");
    // Finaliza el script para evitar ejecución adicional
    exit();
}

// Obtiene el nombre de usuario de la sesión
$usuario_nombre = $_SESSION['usuario_nombre'];
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <!-- Incluye un enlace al archivo CSS de normalización -->
    <link rel="stylesheet" href="../css/normalize.css">
    <!-- Agrega aquí tus estilos y enlaces a recursos adicionales -->
</head>
<body>
    <!-- Muestra un saludo personalizado al usuario -->
    <h1>Bienvenido, <?php echo $usuario_nombre; ?>, a DOGINN</h1>
    <!-- Contenido del dashboard -->

    <!-- Agrega aquí tu contenido específico del dashboard -->

    <!-- Proporciona un enlace para cerrar sesión -->
    <p><a href="cerrar_sesion.php">Cerrar sesión</a></p>
</body>
</html>
