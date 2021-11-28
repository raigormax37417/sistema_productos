<?php
include_once "./Producto.php";
include "./session.php";
//ACTUALIZACION DE UN REGISTRO
if($_SERVER["REQUEST_METHOD"] == "POST"){
  $id = $_POST['id'];
  $descripcion = test_input($_POST["descripcion"]);
  $cantidad = test_input($_POST["cantidad"]);
  $precio = test_input($_POST["precio"]);
  
  $producto = Producto::getById($id);
  //var_dump($cliente);
  //var_dump($apellidos);
  $producto->descripcion = $descripcion;
  $producto->cantidad = $cantidad;
  $producto->precio = $precio;
  $producto->update();

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
