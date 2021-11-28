<?php 
include '../php/session.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Pagina Principal</title>
  <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
  <link rel="stylesheet" href="../css/dashboard.css">
</head>
<body>
    <div class="sidebar">
      <h1 class="sidebar-user__title">Bienvenido:<?php echo $_SESSION['usuario']; ?> </h1>
      <div class="logo-details">
        <i class='bx bx-user-pin'></i>
        <span class="logo_name">Principal</span>
      </div>
      <ul class="nav-links">
        <li>
          <a class="active" href="./welcome.php">
            <i class='bx bxs-grid'></i>
            <span class="links_name">Dashboard</span>
          </a>
        </li>
        <li>
          <a class="active" id="btnEmpleado" href="#">
            <i class='bx bx-face'></i>
            <span class="links_name">Registrar Empleado</span>
          </a>
        </li>
        <li>
          <a class="active" id="btnCliente" href="#">
            <i class='bx bxs-user-check'></i>
            <span class="links_name">Registrar Cliente</span>
          </a>
        </li>
        <li>
          <a class="active" id="btnProducto" href="#">
            <i class='bx bx-box'></i>
            <span class="links_name">Registrar Producto</span>
          </a>
        </li>
        <li>
          <a class="active" id="btnEmpleados" href="#">
            <i class='bx bxs-user-detail'></i>
            <span class="links_name">Empleados</span>
          </a>
        </li>
        <li>
          <a class="active" id="btnClientes" href="#">
            <i class='bx bx-user-circle'></i>
            <span class="links_name">Clientes</span>
          </a>
        </li>
        <li>
          <a class="active" id="btnProductos" href="#">
            <i class='bx bxs-inbox'></i>
            <span class="links_name">Productos</span>
          </a>
        </li>
        <li>
          <a class="active" href="../php/cerrarSesion.php">
            <i class='bx bx-log-out'></i>
            <span class="links_name">Cerrar sesion</span>
          </a>
        </li>
      </ul>
    </div>
    <div id="content" class="container-content">
    </div>
  </div>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="../js/contenido.js"></script>
</body>
</html>
