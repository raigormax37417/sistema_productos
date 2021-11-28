<?php include '../php/session.php';?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Registrar Cliente</title>
  <link rel="stylesheet" href="../css/pages.css">
</head>
<body>
  <form id="form" class="form" action="../php/registroCliente.php" method="POST">
    <div class="container">
      <img class="container-img" src="https://image.flaticon.com/icons/png/512/857/857122.png" alt="imagen-cliente">
      <h2 class="form-title">Registro del Cliente</h2>
      <label class="form-container__label" for="nombre">Nombre</label>
      <input id="nombreC" type="text" class="form-container__input" name="nombre" required>
      <label class="form-container__label" for="apellidos">Apellidos</label>
      <input id="apellidosC" class="form-container__input" type="text" name="apellidos" required>
      <label class="form-container__label" for="fecha_nac">Fecha de Nacimiento</label>
      <input id="fecha_nacC" type="date" class="form-container__input" name="fecha_nac" required>
      <label class="form-container__label" for="correo">Correo</label>
      <input type="emailC" class="form-container__input" name="correo" required>
      <input class="btnEnviar" type="submit" value="Registrar">
    </div>
  </form>
</body>
</html>

