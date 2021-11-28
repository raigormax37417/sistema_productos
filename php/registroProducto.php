<?php
include_once "Producto.php";
//RECIBIENDO DATOS
if($_SERVER["REQUEST_METHOD"] == 'POST'){
  $descripcion = test_input($_POST["descripcion"]);
  $cantidad = test_input($_POST["cantidad"]);
  $precio = test_input($_POST["precio"]);

  $producto = new Producto();
  $producto->descripcion = $descripcion;
  $producto->cantidad = $cantidad;
  $producto->precio = $precio;
  $producto->create();

  header("Location: ../vista/welcome.php");
}
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
