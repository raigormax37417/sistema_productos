<?php
include_once "./Cliente.php";

//CREACION DE UN CLIENTE
if($_SERVER["REQUEST_METHOD"] == 'POST'){
  $nombre = test_input($_POST["nombre"]);
  $apellidos = test_input($_POST["apellidos"]);
  $fecha = test_input($_POST["fecha_nac"]);
  $correo = test_input($_POST["correo"]);

  $cliente = new Cliente();
  $cliente->nombre = $nombre;
  $cliente->apellidos = $apellidos;
  $cliente->fecha = $fecha;
  $cliente->correo = $correo;
  $cliente->create();

  header("Location: ../vista/welcome.php");
}
else {
  echo "Método no válido";
}
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}



