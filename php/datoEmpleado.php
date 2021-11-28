<?php
include_once "./Empleado.php";

$empleados = Empleado::all();
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Tabla de Empleados</title>
  <link rel="stylesheet" href="../css/table.css">
</head>
<body>
  <h2>Tabla de Empleados</h2>
  <table class="table">
   <caption>Empleados</caption>
   <thead>
    <tr>
      <th>Nombre</th>
      <th>Apellidos</th>
      <th>Fecha de Nacimiento</th>
      <th>Correo</th>
      <th>Editar</th>
      <th>Eliminar</th>
    </tr>
   </thead>
   <tbody>
    <?php foreach($empleados as $empleado) {?>
      <tr>
      <td><?php echo $empleado->nombre; ?></td>
      <td><?php echo $empleado->apellidos; ?></td>
      <td><?php echo $empleado->fecha; ?></td>
      <td><?php echo $empleado->correo; ?></td>
      <td><a id="linkEmpEdit" class="table-link table-link__edit" href="../php/vistaUpdateEmpleado.php?id=<?php echo $empleado->id; ?>">Editar</a></td>
      <td><a id="linkEmpDelete" class="table-link table-link__delete" href="../php/deleteEmpleado.php?id=<?php echo $empleado->id; ?>">Eliminar</a></td>
      </tr>
      <?php } ?>
   </tbody> 
  </table>
</body>
</html>
