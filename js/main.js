$(document).ready(function () {
  $("#form").validate({
    rules: {
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
