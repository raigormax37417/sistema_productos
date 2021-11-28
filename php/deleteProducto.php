<?php
include "./session.php";
include_once "./Producto.php";
if($_SERVER["REQUEST_METHOD"] == "GET"){
 $id = $_GET['id'];
 //ELIMINAR UN REGISTRO
 $producto = Producto::getById($id);
 $producto->delete();
 header("Location: ../vista/welcome.php");
} 
else {
 echo "El metodo no es el correcto";
 header("Location: ../vista/welcome.php");
}
