<?php
include_once "./Empleado.php";
include "./session.php";
//ACTUALIZACION DE UN REGISTRO
if($_SERVER["REQUEST_METHOD"] == "POST"){
  $id = $_POST['id'];
  $nombre = test_input($_POST["nombre"]);
  $apellidos = test_input($_POST["apellidos"]);
  $fecha = test_input($_POST["fecha_nac"]);
  $correo = test_input($_POST["correo"]);
  
  $empleado = Empleado::getById($id);
  //var_dump($empleado);
  //var_dump($apellidos);
  $empleado->nombre = $nombre;
  $empleado->apellidos = $apellidos;
  $empleado->fecha = $fecha;
  $empleado->correo = $correo;
  $empleado->update();

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
