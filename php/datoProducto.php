<?php
include_once "./Producto.php";

$productos = Producto::all();
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Tabla de Productos</title>
  <link rel="stylesheet" href="../css/table.css">
</head>
<body>
  <h2>Tabla de Productos</h2>
  <table class="table">
   <caption>Productos</caption>
   <thead>
    <tr>
      <th>Descripcion</th>
      <th>Cantidad</th>
      <th>Precio</th>
      <th></th>
      <th></th>
    </tr>
   </thead>
   <tbody>
    <?php foreach($productos as $producto) {?>
      <tr>
      <td><?php echo $producto->descripcion; ?></td>
      <td><?php echo $producto->cantidad; ?></td>
      <td><?php echo $producto->precio; ?></td>
      <td><a id="linkPrEdit" class="table-link table-link__edit" href="../php/vistaUpdateProducto.php?id=<?php echo $producto->id; ?>">Editar</a></td>
      <td><a id="linkPrDelete" class="table-link table-link__delete" href="../php/deleteProducto.php?id=<?php echo $producto->id; ?>">Eliminar</a></td>
      </tr>
      <?php } ?>
   </tbody> 
  </table>
</body>
</html>
