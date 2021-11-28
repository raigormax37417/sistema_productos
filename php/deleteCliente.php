<?php
include "./session.php";
include_once "./Cliente.php";
if($_SERVER["REQUEST_METHOD"] == "GET"){
 $id = $_GET['id'];
 //ELIMINAR UN REGISTRO
 $cliente = Cliente::getById($id);
 $cliente->delete();
 header("Location: ../vista/welcome.php");
} 
else {
 echo "El metodo no es el correcto";
 header("Location: ../vista/welcome.php");
}
