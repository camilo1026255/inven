
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "inventario";

// Conexión a la base de datos
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Datos del nuevo usuario
$new_username = "james";
$new_password = "james123";
$new_role = "employee"; // Cambiar a 'admin' si el nuevo usuario será administrador

// Insertar usuario
$sql = "INSERT INTO Usuarios (username, password, role) VALUES (?, SHA2(?, 256), ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("sss", $new_username, $new_password, $new_role);

if ($stmt->execute()) {
    echo "Usuario añadido correctamente.";
} else {
    echo "Error al añadir usuario: " . $conn->error;
}

$stmt->close();
$conn->close();
?>
