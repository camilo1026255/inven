<?php
session_start();

// Regenerar el ID de sesión para prevenir ataques de fijación de sesión
session_regenerate_id(true);

// Verificar que el usuario está autenticado y tiene el rol de 'admin'
if (!isset($_SESSION['role']) || $_SESSION['role'] !== 'admin') {
    // Redirigir al inicio si no está autenticado o no es un administrador
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel de Administrador</title>
    <link rel="stylesheet" href="styles.css"> <!-- Asegúrate de que este archivo exista y sea accesible -->
    <style>
        /* Estilos básicos para el panel */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f9;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            flex-direction: column;
        }

        h1 {
            color: #333;
            margin-bottom: 20px;
        }

        ul {
            list-style-type: none;
            padding: 0;
        }

        li {
            margin-bottom: 10px;
        }

        a {
            color: #007BFF;
            text-decoration: none;
            font-weight: bold;
            font-size: 1.2em;
        }

        a:hover {
            text-decoration: underline;
        }

        .logout {
            margin-top: 20px;
            padding: 10px 20px;
            background-color: #f44336;
            color: white;
            text-decoration: none;
            border-radius: 5px;
        }

        .logout:hover {
            background-color: #d32f2f;
        }
    </style>
</head>
<body>

<h1>Bienvenido, <?php echo htmlspecialchars($_SESSION['username']); ?>!</h1>
<p>Seleccione una tabla para gestionar:</p>
<ul>
    <li><a href="aux_bodega.php">Gestionar Aux Bodega</a></li>
    <li><a href="producto_terminado.php">Gestionar Producto Terminado</a></li>
    <li><a href="satelite.php">Gestionar Satelite</a></li>
</ul>

<a href="logout.php" class="logout">Cerrar Sesión</a>

</body>
</html>
