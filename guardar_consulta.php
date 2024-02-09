<?php
$nombre = $_POST['nombre'];
$telefono = $_POST['telefono'];
$email = $_POST['email'];
$detalle = $_POST['detalle'];

// Conectar a la base de datos
$conn = new mysqli("localhost", "root", "", "tienda");

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Insertar los datos en la base de datos
$sql = "INSERT INTO consultas (nombre, telefono, email, detalle) VALUES ('$nombre', '$telefono', '$email', '$detalle')";
if ($conn->query($sql) === TRUE) {
    echo "Consulta enviada correctamente.";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Cerrar la conexión
$conn->close();
?>