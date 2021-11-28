<?php
include '../php/session.php';
include './Producto.php';
if($_SERVER["REQUEST_METHOD"] == "GET") {
  $id = $_GET['id'];
  $producto = Producto::getById($id);
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Actualizar Producto</title>
  <link rel="stylesheet" href="../css/pages.css">
</head>
<body>
  <form id="form" class="form" action="./updateProducto.php" method="POST">
    <div class="container">
      <img class="container-img" src="https://image.flaticon.com/icons/png/512/3172/3172106.png" alt="imagen-producto">
      <h2 class="form-title">Actualizar Producto</h2>
      <input id="" type="text" name="id" value="<?php echo $producto->id; ?>">
      <label class="form-container__label" for="descripcion">Descripcion</label>
      <input id="descripcion" type="text" class="form-container__input" name="descripcion" value="<?php echo $producto->descripcion; ?>" required>
      <label class="form-container__label" for="cantidad">Cantidad</label>
      <input id="cantidad" class="form-container__input" type="number" name="cantidad" value="<?php echo $producto->cantidad; ?>" required>
      <label class="form-container__label" for="precio">Precio</label>
      <input id="precio" type="text" class="form-container__input" name="precio" value="<?php echo $producto->precio; ?>" required>
      <input class="btnEnviar" type="submit" value="Actualizar">
    </div>
  </form>
</body>
</html>
