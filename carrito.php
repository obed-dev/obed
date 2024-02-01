<?php

include 'funciones.php';

// Iniciar sesión para acceder al carrito de compras
session_start();

echo "<h1>Carrito de Compras</h1>";

// Verificar si hay elementos en el carrito
if(isset($_SESSION['carrito']) && count($_SESSION['carrito']) > 0) {
    echo "<ul>";
    // Mostrar los productos en el carrito
    foreach ($_SESSION['carrito'] as $codigo_producto) {
        $producto = obtenerProductoPorCodigo($codigo_producto);
        echo "<li><strong>Código:</strong> " . $producto['codigo'] . " - <strong>Nombre:</strong> " . $producto['nombre'] . " - <strong>Precio:</strong> $" . $producto['precio'] . "</li>";
    }
    echo "</ul>";

    // Botón para borrar el carrito
    echo "<form action='borrar_carrito.php' method='post'>";
    echo "<input type='submit' value='Borrar Carrito'>";
    echo "</form>";
} else {
    echo "El carrito de compras está vacío.";
}

?>