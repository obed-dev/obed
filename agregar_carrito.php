<?php

include 'funciones.php';

// Verificar si se ha recibido el código del producto
if(isset($_GET['codigo'])) {
    $codigo_producto = $_GET['codigo'];
    
    // Iniciar sesión para manejar el carrito de compras
    session_start();

    // Agregar el código del producto al carrito de compras
    if(!isset($_SESSION['carrito'])) {
        $_SESSION['carrito'] = array();
    }
    
    array_push($_SESSION['carrito'], $codigo_producto);
    
    // Redireccionar de vuelta a la página de productos
    header('Location: index.php');
    exit();
} else {
    // Redireccionar a la página de productos si no se proporcionó un código de producto
    header('Location: index.php');
    exit();
}

?>