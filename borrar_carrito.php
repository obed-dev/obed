<?php

// Iniciar sesión para acceder al carrito de compras
session_start();

// Borrar el carrito
unset($_SESSION['carrito']);

// Redireccionar a la página de productos
header('Location: index.php');

exit();

?>