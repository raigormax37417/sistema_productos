$(document).ready(function () {
  $("#form").validate({
    rules: {
      nombre: {
        required: true,
        minlength: 5,
      },
      apellidos: {
        required: true,
        minlength: 5,
      },
      correo: {
        required: true,
      },
      usuario: {
        required: true,
        minlength: 3,
      },
      password: {
        required: true,
        minlength: 5,
      },
    },
    messages: {
      nombre: {
        required: "Ingrese un nombre",
        minlength: "El nombre debe tener mínimo 5 caracteres",
      },
      apellidos: {
        required: "Ingrese sus apellidos",
        minlength: "Ingrese como mínimo 5 caracteres",
      },
      correo: {
        required: "Ingrese el correo electrónico",
      },
      usuario: {
        required: "Ingrese el usuario",
        minlength: "Tu usuario debe tener minimo 3 caracteres",
      },
      password: {
        required: "Ingrese una contraseña",
        minlength: "Tu contraseña debe ser mayor a 5 caracteres",
      },
    },
  });
});
