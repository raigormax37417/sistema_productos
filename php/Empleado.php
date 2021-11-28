<?php 
include_once "./Conexion.php";

class Empleado extends Conexion {
  public $nombre;
  public $apellidos;
  public $fecha;
  public $correo;
  
  public function create() {
    $this->conectar();
    $prepare = mysqli_prepare($this->con,"INSERT INTO empleado (nombre, apellidos, fecha, correo) VALUES(?,?,?,?)");
    $prepare->bind_param("ssss",$this->nombre,$this->apellidos,$this->fecha,$this->correo);
    $prepare->execute();
  }
  //Funcion update
  public function update() {
    $this->conectar();
    $prepare = mysqli_prepare($this->con, "UPDATE empleado SET nombre=?, apellidos=?, correo=?, fecha=? WHERE id=?");
    $prepare->bind_param("ssssi",$this->nombre, $this->apellidos, $this->correo, $this->fecha, $this->id);
    $prepare->execute();
  }
  //Funcion delete
  public function delete(){
    $this->conectar();
    $prepare = mysqli_prepare($this->con, "DELETE FROM empleado WHERE id = ?");
    $prepare->bind_param("i",$this->id);
    $prepare->execute();
  }
  //Get ALL
  public static function all() {
    $conexion = new Conexion();
    $conexion->conectar();
    $prepare = mysqli_prepare($conexion->con, "SELECT * FROM empleado");
    $prepare->execute();
    $res = $prepare->get_result();
    $empleados = [];
    while($empleado = $res->fetch_object(Empleado::class)){
      array_push($empleados, $empleado);
    }
    return $empleados;
  }
  //function getId
  public static function getById($id) {
    $conexion = new Conexion();
    $conexion->conectar();
    $prepare = mysqli_prepare($conexion->con, "SELECT * FROM empleado WHERE id = ?");
    $prepare->bind_param("i",$id);
    $prepare->execute();
    $res = $prepare->get_result(); 
    return $res->fetch_object(Empleado::class);
  }
}
