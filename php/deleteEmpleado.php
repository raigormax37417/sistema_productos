<?php
include "./session.php";
include_once "./Empleado.php";
if($_SERVER["REQUEST_METHOD"] == "GET"){
 $id = $_GET['id'];
 //ELIMINAR UN REGISTRO
 $empleado = Empleado::getById($id);
 $empleado->delete();
 header("Location: ../vista/welcome.php");
} 
else {
 echo "El metodo no es el correcto";
 header("Location: ../vista/welcome.php");
}
