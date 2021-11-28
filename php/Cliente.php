<?php 
include_once "./Conexion.php";

class Cliente extends Conexion {
  public $nombre;
  public $apellidos;
  public $fecha;
  public $correo;
  
  public function create() {
    $this->conectar();
    $prepare = mysqli_prepare($this->con,"INSERT INTO cliente (nombre, apellidos, fecha, correo) VALUES(?,?,?,?)");
    $prepare->bind_param("ssss",$this->nombre,$this->apellidos,$this->fecha,$this->correo);
    $prepare->execute();
  }
  //Funcion update
  public function update() {
    $this->conectar();
    $prepare = mysqli_prepare($this->con, "UPDATE cliente SET nombre=?, apellidos=?, fecha=?, correo=? WHERE id=?");
    $prepare->bind_param("ssssi",$this->nombre, $this->apellidos,$this->fecha, $this->correo,$this->id);
    $prepare->execute();
  }
  //Funcion delete
  public function delete(){
    $this->conectar();
    $prepare = mysqli_prepare($this->con, "DELETE FROM cliente WHERE id = ?");
    $prepare->bind_param("i",$this->id);
    $prepare->execute();
  }
  //Get ALL
  public static function all() {
    $conexion = new Conexion();
    $conexion->conectar();
    $prepare = mysqli_prepare($conexion->con, "SELECT * FROM cliente");
    $prepare->execute();
    $res = $prepare->get_result();
    $clientes = [];
    while($cliente = $res->fetch_object(Cliente::class)){
      array_push($clientes, $cliente);
    }
      return $clientes;
  }

  //function getId
  public static function getById($id) {
    $conexion = new Conexion();
    $conexion->conectar();
    $prepare = mysqli_prepare($conexion->con, "SELECT * FROM cliente WHERE id = ?");
    $prepare->bind_param("i",$id);
    $prepare->execute();
    $res = $prepare->get_result(); 
    return $res->fetch_object(Cliente::class);
  }
}
