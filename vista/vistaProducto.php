<?php include '../php/session.php';?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Registrar Producto</title>
  <link rel="stylesheet" href="../css/pages.css">
</head>
<body>
  <form id="form" class="form" action="../php/registroProducto.php" method="POST">
    <div class="container">
      <img class="container-img" src="https://image.flaticon.com/icons/png/512/3172/3172106.png" alt="imagen-producto">
      <h2 class="form-title">Registro del Producto</h2>
      <label class="form-container__label" for="descripcion">Descripcion</label>
      <input id="descripcion" type="text" class="form-container__input" name="descripcion" required>
      <label class="form-container__label" for="cantidad">Cantidad</label>
      <input id="cantidad" class="form-container__input" type="number" name="cantidad" required>
      <label class="form-container__label" for="precio">Precio</label>
      <input id="precio" type="text" class="form-container__input" name="precio" required>
      <input class="btnEnviar" type="submit" value="Registrar">
    </div>
  </form>
</body>
</html>
