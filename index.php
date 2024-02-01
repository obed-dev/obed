
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos de la Tienda</title>
    <link rel="stylesheet" href="style.css">
    
</head>
<body>
   
       
    <h1>Productos de la Tienda</h1>
    <div class="productos">
        <?php
        // Include para el archivo de funciones
        include 'funciones.php';
        

        // Mostrar productos
        mostrarProductos();
        ?>
    </div>
    <a href="carrito.php">Ver Carrito de Compras</a>
    </div>
</body>
</html>