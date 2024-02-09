<?php

include 'funciones.php';
// Iniciar sesión para acceder al carrito de compras
session_start();

// Mostrar los artículos comprados y el monto total
echo "<h1>Resumen de la Compra</h1>";
if(isset($_SESSION['carrito']) && count($_SESSION['carrito']) > 0) {
    echo "<ul>";
    foreach ($_SESSION['carrito'] as $codigo_producto) {
        $producto = obtenerProductoPorCodigo($codigo_producto);
        echo "<li><strong>Código:</strong> " . $producto['codigo'] . " - <strong>Nombre:</strong> " . $producto['nombre'] . " - <strong>Precio:</strong> $" . $producto['precio'] . "</li>";
    }
    echo "</ul>";

    // Calcular el monto total
    $total = 0;
    foreach ($_SESSION['carrito'] as $codigo_producto) {
        $producto = obtenerProductoPorCodigo($codigo_producto);
        $total += $producto['precio'];
    }
    
    echo "<p><strong>Monto Total:</strong> $" . $total . "</p>";

    // Botón para finalizar la compra
    echo "<form action='index.php'  method='post'>";
    echo  "Compra realizada con exito ✔️<br>";
    echo "<input type='submit' value='Volver al menu principal'>";
    echo "</form>";
} else {
    echo "El carrito de compras está vacío.";
}
?>