<?php
include_once "./Cliente.php";
include "./session.php";
//ACTUALIZACION DE UN REGISTRO
if($_SERVER["REQUEST_METHOD"] == "POST"){
  $id = $_POST['id'];
  $nombre = test_input($_POST["nombre"]);
  $apellidos = test_input($_POST["apellidos"]);
  $fecha = test_input($_POST["fecha_nac"]);
  $correo = test_input($_POST["correo"]);
  
  $cliente = Cliente::getById($id);
  //var_dump($cliente);
  //var_dump($apellidos);
  $cliente->nombre = $nombre;
  $cliente->apellidos = $apellidos;
  $cliente->fecha = $fecha;
  $cliente->correo = $correo;
  $cliente->update();

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
