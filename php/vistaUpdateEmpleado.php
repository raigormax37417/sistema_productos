<?php
include './session.php';
include_once "./Empleado.php";
  $id = $_GET['id'];
  $cliente = Empleado::getById($id);
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Actualizar Empleado</title>
  <link rel="stylesheet" href="../css/pages.css">
</head>
<body>
  <form id="form" class="form" action="./updateEmpleado.php" method="POST">
    <div class="container">
      <img class="container-img" src="https://image.flaticon.com/icons/png/512/857/857122.png" alt="imagen-cliente">
      <h2 class="form-title">Actualizar Empleado</h2>
      <input id="" class="form-container__input" type="text" name="id" value="<?php echo $cliente->id; ?>">
      <label class="form-container__label" for="nombre">Nombre</label>
      <input id="nombreC" type="text" class="form-container__input" name="nombre" value="<?php echo $cliente->nombre; ?>" required>
      <label class="form-container__label" for="apellidos">Apellidos</label>
      <input id="apellidosC" class="form-container__input" type="text" name="apellidos" value="<?php echo $cliente->apellidos; ?>" required>
      <label class="form-container__label" for="fecha_nac">Fecha de Nacimiento</label>
      <input id="fecha_nacC" type="date" class="form-container__input" name="fecha_nac" value="<?php echo $cliente->fecha; ?>" required>
      <label class="form-container__label" for="correo">Correo</label>
      <input type="emailC" class="form-container__input" name="correo" value="<?php echo $cliente->correo; ?>" required>
      <input class="btnEnviar" type="submit" value="Actualizar">
    </div>
  </form>
</body>
</html>
