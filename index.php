<?php
session_start();
if($_SESSION['usuario']){
  header("Location: ./vista/welcome.php");
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Sistema Productos</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <form action="php/getDataLogin.php" method="POST" id="form" class="form">
      <h2 class="form-title">Login de Usuario</h2>
      <img class="form-img" src="img/ingresar_usuario.svg" alt="">
      <input id="usuario" class="form-input" type="text" name="usuario" placeholder="usuario..." required>
      <input id="password" class="form-input" type="password" name="password" placeholder="password...." required>
      <input id="login" class="login" type="submit" value="Iniciar Sesión">
  </form>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>
<script src="js/main.js"></script>
</body>
</html>
