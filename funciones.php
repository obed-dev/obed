<?php

function conectarDB() {
    $servername = "localhost";
    $username = "root"; // Cambiar por el nombre de usuario de la base de datos
    $password = ""; // Cambiar por la contraseña de la base de datos
    $dbname = "tienda";

    // Crear conexión
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Verificar la conexión
    if ($conn->connect_error) {
        die("Conexión fallida: " . $conn->connect_error);
    }

    return $conn;
}

function mostrarProductos() {
    $conn = conectarDB();

    // Consulta SQL para obtener todos los productos
    $sql = "SELECT * FROM Productos";
    $result = $conn->query($sql);

    // Verificar si hay resultados
    if ($result->num_rows > 0) {
        // Mostrar datos de cada producto
        while($row = $result->fetch_assoc()) {
            echo "<div class='producto'>";
            echo "<img src='" . $row["imagen"] . "' alt='" . $row["nombre"] . "'><br>";
            echo "<strong>Código:</strong> " . $row["codigo"] . "<br>";
            echo "<strong>Nombre:</strong> " . $row["nombre"] . "<br>";
            echo "<strong>Detalle:</strong> " . $row["detalle"] . "<br>";
            echo "<strong>Precio:</strong> $" . $row["precio"] . "<br>";
            echo "<a href='agregar_carrito.php?codigo=" . $row["codigo"] . "'>Agregar al Carrito</a>";
            echo "</div>";
        }
    } else {
        echo "No se encontraron productos.";
    }

    // Cerrar la conexión
    $conn->close();
}

function obtenerProductoPorCodigo($codigo) {
    $conn = conectarDB();

    // Escapar el código para evitar inyección SQL
    $codigo = $conn->real_escape_string($codigo);

    // Consulta SQL para obtener el producto por su código
    $sql = "SELECT * FROM productos WHERE codigo = '$codigo'";
    $result = $conn->query($sql);

    // Verificar si se encontró el producto
    if ($result->num_rows > 0) {
        // Retornar los datos del producto como un arreglo asociativo
        return $result->fetch_assoc();
    } else {
        return false; // Retorna falso si no se encuentra el producto
    }

    // Cerrar la conexión
    $conn->close();
}

?>