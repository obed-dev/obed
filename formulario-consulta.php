<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Formulario de Consulta</title>
</head>
<body>
    <h1>Formulario de Consulta</h1>
    

    <form class="row g-3" action="guardar_consulta.php"  method="post">
  <div class="col-md-4">
    <label for="nombre" class="form-label" >Nombre:</label>
    <input type="text" class="form-control" id="nombre" name="nombre"   required>
    
  </div>
  <div class="col-md-4">
    <label for="telefono" class="form-label">Telefono</label>
    <input type="text" class="form-control" id="telefono" name="telefono"  required>
    
  </div>
  <div class="mb-3">
  <label for="email" class="form-label">Correo Electronico </label>
  <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com" required>
</div>
<div class="mb-3">
  <label for="detalle" class="form-label">Detalle de la consulta </label>
  <textarea class="form-control" id="detalle" name="detalle" rows="3"   required></textarea>
</div>
    </div>
  </div>
  <div class="col-12">
    <button class="btn btn-primary" type="submit">Enviar Consulta</button>
  </div>
</form>





</body>
</html>