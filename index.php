<?php
    $saludos = [
        "Hola 👋",
        "Buenos días ☀️",
        "Buenas tardes 🌇",
        "Buenas noches 🌙",
        "¡Qué tal! 😄",
        "Bienvenido 🚀"
    ];

    $saludo = $saludos[array_rand($saludos)];
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hola PHP</title>

    <link rel="stylesheet" href="style.css">
</head>

<body>

<div class="container">

    <h1 id="saluffdo"><?php echo $saludo; ?></h1>

    <p>El saludo lo genera PHP y el botón lo controla JS</p>

    <button onclick="nuevoSaludo()">Nuevo saludo</button>

</div>

<script src="script.js"></script>
</body>
</html>