<?php
session_start();
if (!isset($_SESSION['role']) || $_SESSION['role'] !== 'employee') {
    header("Location: index.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel del Empleado</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

<h1>Bienvenido, Empleado</h1>
<p>Opciones disponibles:</p>
<ul>
    <li><a href="producto_terminado.php">Gestionar Producto Terminado</a></li>
</ul>
<a href="logout.php">Cerrar Sesión</a>

</body>
</html>
