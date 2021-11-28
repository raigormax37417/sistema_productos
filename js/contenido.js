let empleado = "#btnEmpleado";
let urlEmpleado = "../vista/vistaEmpleado.php";
let cliente = "#btnCliente";
let urlCliente = "../vista/vistaCliente.php";
let producto = "#btnProducto";
let urlProducto = "../vista/vistaProducto.php";
let empleados = "#btnEmpleados";
let urlEmpleados = "../php/datoEmpleado.php";
let clientes = "#btnClientes";
let urlClientes = "../php/datoCliente.php";
let productos = "#btnProductos";
let urlProductos = "../php/datoProducto.php";

$(document).ready(function () {
  $.mostrarVentana = function (url) {
    var time = 2000;
    $.ajax({
      url: url,
      beforeSend: function () {
        $("#content").text("Cargando...");
      },
      success: function (data) {
        setTimeout(function () {
          $("#content").html(data);
        }, time);
      },
    });
  };
  //prueba de la function
  $(empleado).click(function () {
    $.mostrarVentana(urlEmpleado);
  });
  $(empleados).click(function () {
    $.mostrarVentana(urlEmpleados);
  });
  $(clientes).click(function () {
    $.mostrarVentana(urlClientes);
  });
  $(productos).click(function () {
    $.mostrarVentana(urlProductos);
  });
  $(cliente).click(function () {
    $.mostrarVentana(urlCliente);
  });
  $(producto).click(function () {
    $.mostrarVentana(urlProducto);
  });
});
