<?php include '../php/session.php';?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Registrar Empleado</title>
  <link rel="stylesheet" href="../css/pages.css">
</head>
<body>
  <form id="form" class="form" action="../php/registroEmpleado.php" method="POST">
    <div class="container">
      <img class="container-img" src="https://image.flaticon.com/icons/png/512/476/476844.png" alt="imagen-empleado">
      <h2 class="form-title">Registro del Empleado</h2>
      <label class="form-container__label" for="nombre">Nombre</label>
      <input id="nombre" type="text" class="form-container__input" name="nombre" required>
      <label class="form-container__label" for="apellidos">Apellidos</label>
      <input id="apellidos" class="form-container__input" type="text" name="apellidos" required>
      <label class="form-container__label" for="fecha_nac">Fecha de Nacimiento</label>
      <input id="fecha_nac" type="date" class="form-container__input" name="fecha_nac" required>
      <label class="form-container__label" for="correo">Correo</label>
      <input type="email" class="form-container__input" name="correo" required>
      <input class="btnEnviar" type="submit" value="Registrar">
    </div>
  </form>
</body>
</html>

