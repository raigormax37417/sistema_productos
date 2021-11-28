<?php 
include_once "./Conexion.php";

class Producto extends Conexion {
  public $descripcion;
  public $cantidad;
  public $precio;
  
  public function create() {
    $this->conectar();
    $prepare = mysqli_prepare($this->con,"INSERT INTO producto (descripcion, cantidad, precio) VALUES(?,?,?)");
    $prepare->bind_param("sid",$this->descripcion,$this->cantidad,$this->precio);
    $prepare->execute();
  }
  //Funcion update
  public function update() {
    $this->conectar();
    $prepare = mysqli_prepare($this->con, "UPDATE producto SET descripcion=?, cantidad=?, precio=? WHERE id=?");
    $prepare->bind_param("sidi",$this->descripcion, $this->cantidad, $this->precio, $this->id);
    $prepare->execute();
  }
  //Funcion delete
  public function delete(){
    $this->conectar();
    $prepare = mysqli_prepare($this->con, "DELETE FROM producto WHERE id = ?");
    $prepare->bind_param("i",$this->id);
    $prepare->execute();
  }
  //Get ALL
  public static function all() {
    $conexion = new Conexion();
    $conexion->conectar();
    $prepare = mysqli_prepare($conexion->con, "SELECT * FROM producto");
    $prepare->execute();
    $res = $prepare->get_result();
    $productos = [];
    while($producto = $res->fetch_object(Producto::class)){
      array_push($productos, $producto);
    }
    return $productos;
  }
  //function getId
  public static function getById($id) {
    $conexion = new Conexion();
    $conexion->conectar();
    $prepare = mysqli_prepare($conexion->con, "SELECT * FROM producto WHERE id = ?");
    $prepare->bind_param("i",$id);
    $prepare->execute();
    $res = $prepare->get_result(); 
    return $res->fetch_object(Producto::class);
  }
}
