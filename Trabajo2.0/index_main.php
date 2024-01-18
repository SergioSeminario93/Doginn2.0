<?php 
// Solicitamos el archivo de conexión a la base de datos
include 'includes/conexion.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Establece el juego de caracteres UTF-8 para admitir caracteres especiales -->
    <meta charset="UTF-8">
    <!-- Configura la vista del contenido para dispositivos móviles -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Establece el título de la página -->
    <title>DOGINN</title>
    <!-- Precarga la hoja de estilos normalize.css -->
    <link rel="preload" href="css/normalize.css" as="style">
    <!-- Enlaza la hoja de estilos normalize.css -->
    <link rel="stylesheet" href="css/normalize.css">
    <!-- Enlaza a la fuente de Google y precarga la hoja de estilos styles.css -->
    <link href="https://fonts.googleapis.com/css2?family=Krub:wght@400;700&display=swap" rel="stylesheet">
    <link rel="preload" href="css/styles.css" as="style">
    <!-- Enlaza la hoja de estilos styles.css -->
    <link href="css/styles.css" rel="stylesheet">
    <!-- Precarga y enlaza las hojas de estilos login.css -->
    <link rel="preload" href="css/login.css" as="style">
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
    <!-- Encabezado de la página -->
    <header>
        <h1 class="titulo">DOGINN <span>Booking</span></h1>
    </header>

    <!-- Barra de navegación -->
    <div class="nav-bg">
        <nav class="navegacion-principal contenedor">
            <a href="#">Inicio</a>
            <a href="#">Reservas</a>
            <a href="#">Galeria</a>
            <a href="#">Contacto</a>
        </nav>
    </div>

    <!-- Sección principal (Hero) -->
    <section class="hero">
        <div class="contenido-hero">
            <h2>Reservas <span> de Guarderías Caninas</span></h2>
            <div class="ubicacion">
                <!-- Icono de ubicación -->
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-map-pin" width="88" height="88" viewBox="0 0 24 24" stroke-width="1.5" stroke="#FFC107" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z"/>
                    <circle cx="12" cy="11" r="3" />
                    <path d="M17.657 16.657L13.414 20.9a1.998 1.998 0 0 1 -2.827 0l-4.244-4.243a8 8 0 1 1 11.314 0z" />
                </svg>
                <p>Madrid</p>
            </div>
            <!-- Botones para iniciar sesión y registrarse -->
            <a class="boton" href="login.php">Inicia Sesión</a>
            <p>o</p>
            <a class="reg" href="registro.php">Regístrate</a>
        </div> <!-- .contenido-hero -->
    </section>

    <!-- Contenido principal (Main) -->
    <main class="contenedor sombra">
        <h2>Reserva</h2>

        <!-- Sección de servicios -->
        <div class="servicios">
            <!-- Servicio 1: Blog -->
            <section class="servicio">
                <h3>Blog</h3>
                <div class="iconos">
                    <!-- Icono del blog -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-palette" width="40" height="40" viewBox="0 0 24 24" stroke-width="1.5" stroke="#000000" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z"/>
                        <path d="M12 21a9 9 0 1 1 0 -18a9 8 0 0 1 9 8a4.5 4 0 0 1 -4.5 4h-2.5a2 2 0 0 0 -1 3.75a1.3 1.3 0 0 1 -1 2.25" />
                        <circle cx="7.5" cy="10.5" r=".5" fill="currentColor" />
                        <circle cx="12" cy="7.5" r=".5" fill="currentColor" />
                        <circle cx="16.5" cy="10.5" r=".5" fill="currentColor" />
                    </svg>
                </div>
                <p> Pellentesque odio ex, bibendum quis convallis scelerisque, eleifend vitae lectus. Quisque in erat justo. </p>
            </section>
       
            <!-- Servicio 2: Formación -->
            <section class="servicio">
                <h3>Formación</h3>
                <div class="iconos">
                    <!-- Iconos de Android y Apple para representar la formación -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-android" width="40" height="40" viewBox="0 0 24 24" stroke-width="1.5" stroke="#000000" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z"/>
                        <line x1="4" y1="10" x2="
