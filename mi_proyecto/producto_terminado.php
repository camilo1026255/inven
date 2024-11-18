<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ingreso en Producto Terminado</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

<h1>Ingreso de Datos en Producto Terminado</h1>

<!-- Formulario para ingresar datos en Producto_Terminado -->
<form action="insert.php" method="POST">
    <input type="hidden" name="table" value="Producto_Terminado">
    <label>Fecha de Entrada:</label>
    <input type="date" name="Fecha_entrada" required><br>
    <label>Fecha de Entrega:</label>
    <input type="date" name="Fecha_Entrega" required><br>
    <label>Cantidad:</label>
    <input type="number" name="Cantidad" required><br>
    <label>Tipo de Chaqueta:</label>
    <input type="text" name="Tipo_Chaqueta" required><br>
    <label>Material Sobrante:</label>
    <input type="text" name="Material_Sobrante" required><br>
    <button type="submit">Guardar en Producto Terminado</button>
</form>

<!-- Botón para regresar a la página principal -->
<button onclick="window.location.href='index.php'">Volver a la Página Principal</button>

</body>
</html>
