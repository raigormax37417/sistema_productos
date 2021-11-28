<?php
include 'Login.php';
  
  $user = $password = "";  

  if($_SERVER["REQUEST_METHOD"] == 'POST'){
    $user = test_input($_POST["usuario"]);
    $password = test_input($_POST["password"]);

    $usuario = new Login();
    if($usuario->getUser($user,$password)){
      crearSesion($user);
    }else{
      echo "El usuario no existe";
      header('Location: ../index.php');
    }
  }
  function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
  function crearSesion($usr) {
    session_start();
    $_SESSION['usuario'] = $usr;
    header("Location: ../vista/welcome.php");
  }
