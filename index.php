<?php
    // Array de saludos gestionado por PHP (servidor)
    $saludos = [
        "Hola 👋",
        "Buenos días ☀️",
        "Buenas tardes 🌇",
        "Buenas noches 🌙",
        "¡Qué tal! 😄",
        "Bienvenido 🚀"
    ];

    // PHP elige uno aleatorio
    $saludo = $saludos[array_rand($saludos)];
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hola PHP</title>

    <style>
        body {
            margin: 0;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #74ebd5, #ACB6E5);
            color: #333;
        }

        .container {
            text-align: center;
        }

        h1 {
            font-size: 3rem;
        }

        p {
            font-size: 1.2rem;
            margin-top: 10px;
        }

        button {
            margin-top: 20px;
            padding: 10px 20px;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            font-size: 1rem;
            background: #333;
            color: white;
        }

        button:hover {
            background: #555;
        }
    </style>
</head>

<body>

<div class="container">

    <!-- SALUDO GENERADO POR PHP -->
    <h1><?php echo $saludo; ?></h1>

    <p>El saludo lo gestiona PHP en el servidor</p>

    <!-- Botón que recarga la página -->
    <button onclick="location.reload()">Nuevo saludo</button>

</div>

</body>
</html>