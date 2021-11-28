<?php
include "./session.php";
include_once "./Cliente.php";

$clientes = Cliente::all();
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Tabla de Clientes</title>
  <link rel="stylesheet" href="../css/table.css">
</head>
<body>
  <h2>Tabla de Clientes</h2>
  <table class="table">
   <caption>Clientes</caption>
   <thead>
    <tr>
      <th>Nombre</th>
      <th>Apellidos</th>
      <th>Fecha de Nacimiento</th>
      <th>Correo</th>
      <th></th>
      <th></th>
    </tr>
   </thead>
   <tbody>
    <?php foreach($clientes as $cliente) {?>
      <tr>
      <td><?php echo $cliente->nombre; ?></td>
      <td><?php echo $cliente->apellidos; ?></td>
      <td><?php echo $cliente->fecha; ?></td>
      <td><?php echo $cliente->correo; ?></td>
      <td><a id="linkClEdit" class="table-link table-link__edit" href="../php/vistaUpdateCliente.php?id=<?php echo $cliente->id; ?>">Editar</a></td>
      <td><a id="linkClDelete" class="table-link table-link__delete" href="../php/deleteCliente.php?id=<?php echo $cliente->id; ?>">Eliminar</a></td>
      </tr>
      <?php } ?>
   </tbody> 
  </table>
</body>
</html>
