<?php
  require_once "Conexion.php";

class Login extends Conexion {

  public function getUser($user, $password) {
    $this->conectar();
    $prepare = mysqli_prepare($this->con,"SELECT user,password FROM usuario WHERE user = ? AND password = ?");
    $prepare->bind_param("ss",$user,$password);
    $prepare->execute();
    $res = $prepare->get_result(); 
    //return $res->fetch_object(Login::class);
    $numRows = $res->num_rows;
    if($numRows == 1) return true; else return false;  
  }
  public function UserCreate() {
    $this->conectar();
    $prepare = mysqli_prepare($this->con,"INSERT INTO user (user, password) VALUES(?,?)");
    $prepare->bind_param("ss",$this->user,$this->password);
    $prepare->execute();
  }
}
