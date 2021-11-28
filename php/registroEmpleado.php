<?php
include_once "Empleado.php";
//RECIBIENDO DATOS
if($_SERVER["REQUEST_METHOD"] == 'POST'){
  $nombre = test_input($_POST["nombre"]);
  $apellidos = test_input($_POST["apellidos"]);
  $fecha = test_input($_POST["fecha_nac"]);
  $correo = test_input($_POST["correo"]);

  $empleado = new Empleado();
  $empleado->nombre = $nombre;
  $empleado->apellidos = $apellidos;
  $empleado->fecha = $fecha;
  $empleado->correo = $correo;
  $empleado->create();

  header("Location: ../vista/welcome.php");
}
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

