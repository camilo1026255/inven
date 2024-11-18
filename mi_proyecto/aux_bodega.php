<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ingreso en Aux Bodega</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

<h1>Ingreso de Datos en Aux Bodega</h1>

<!-- Formulario para ingresar datos en Aux_Bodega -->
<form action="insert.php" method="POST">
    <input type="hidden" name="table" value="Aux_Bodega">
    <label>Nombre:</label>
    <input type="text" name="nombre" required><br>
    <label>Tipo de Material:</label>
    <input type="text" name="tipo_material" required><br>
    <label>Unidad de Medida:</label>
    <input type="number" name="unidad_medida" required><br>
    <label>Fecha:</label>
    <input type="date" name="fecha" required><br>
    <label>Stock Disponible:</label>
    <input type="number" name="stock_disponible" required><br>
    <label>Precio por Rollo:</label>
    <input type="number" name="precio_rollo" required><br>
    <button type="submit">Guardar en Aux_Bodega</button>
</form>

<!-- Botón para regresar a la página principal -->
<button onclick="window.location.href='dashboard_admin.php'">Volver a la Página Principal</button>

</body>
</html>
