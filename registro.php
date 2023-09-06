<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/registro.css">
    <title>Document</title>
</head>
<body>

  <nav class="navVolverAtras" id="contenedorBoton">
    <a onclick="volverAtras()"><img src="imgProyecto/boton-volver.png" alt="Boton de Volver" class="botonVolver">
    </a>
  </nav>

<script> //script del nav
  function volverAtras() {
  window.history.back();
  }
</script>

  <div class="form">
    <img src="imgProyecto/logo.png" alt=""> <!--Logo de App-->
      <h1 id="titulo">REGISTRO</h1>
  
      <form method="post">
        <div class="username">
          <label id="nombre"> NOMBRE DE USUARIO</label>
          <div class="input">
            <input type="text" required>
          </div>
        </div>

        <div class="username">
          <label id="label-contrasena1"> CONTRASEÑA</label>
          <div class="input">
          <input type="password" id="contrasena1" placeholder="Ingrese la contraseña" oninput="validarContrasenas()" onkeyup="checkContrasenas()" required>
          </div>
        </div>
  
        <div class="username">
          <label id="label-contrasena2"> REPETIR CONTRASEÑA</label>
          <div class="input">
          <input type="password" id="contrasena2" placeholder="Confirme la contraseña" oninput="validarContrasenas()" onkeyup="checkContrasenas()" required>
          </div>
        </div>

        <div class="submitBtn">
          <input type="submit"  id="botonEnviar" value="INICIAR">
        </div>

        <div class="registrarse">
        QUIERO HACER EL <a href="inicioSesion.php">INICIO SESION</a>
      </div>

<script id="validacion">
  // Función que se usará para validar las contraseñas
  function validarContrasenas() {
    // Obtiene el valor del primer campo de contraseña usando su ID
    var contrasena1 = document.getElementById("contrasena1").value;

    // Obtiene el valor del segundo campo de contraseña usando su ID
    var contrasena2 = document.getElementById("contrasena2").value;

    // Obtiene la referencia al elemento del primer campo de contraseña
    var input1 = document.getElementById("contrasena1");

    // Obtiene la referencia al elemento del segundo campo de contraseña
    var input2 = document.getElementById("contrasena2");

    // Verifica si las contraseñas coinciden y si ninguna de ellas está vacía
    if (contrasena1 === contrasena2 && contrasena1 !== '') {
      // Cambia el color del borde a verde si las contraseñas coinciden
      input1.style.borderColor = "green";
      input2.style.borderColor = "green";
    } else {
      // Cambia el color del borde a rojo si las contraseñas no coinciden o están vacías
      input1.style.borderColor = "red";
      input2.style.borderColor = "red";
    }
  }
</script>

<script id="check">
    // Esta función se usa para comprobar si las dos contraseñas coinciden
    function checkContrasenas() {
      // Obtiene el valor del primer campo de contraseña
      var contrasena1 = document.getElementById("contrasena1").value;
      // Obtiene el valor del segundo campo de contraseña
      var contrasena2 = document.getElementById("contrasena2").value;
      // Obtiene el botón de envío por su ID
      var botonEnviar = document.getElementById("botonEnviar");

      // Comprueba si las contraseñas coinciden y si no están vacías
      if (contrasena1 === contrasena2 && contrasena1 !== '') {
        // Si las contraseñas coinciden y no están vacías, habilita el botón de envío
        botonEnviar.disabled = false;
      } else {
        // Si las contraseñas no coinciden o están vacías, deshabilita el botón de envío
        botonEnviar.disabled = true;
      }
    }

    // Se ejecuta cuando la página se carga por completo
    window.addEventListener("load", function() {
      // Añade un detector de eventos "submit" al formulario
      document.getElementById("miFormulario").addEventListener("submit", function(event) {
        // Obtiene de nuevo los valores de los campos de contraseña
        var contrasena1 = document.getElementById("contrasena1").value;
        var contrasena2 = document.getElementById("contrasena2").value;

        // Comprueba si las contraseñas coinciden
        if (contrasena1 !== contrasena2) {
          // Detiene el envío del formulario
          event.preventDefault();
          // Si las contraseñas no coinciden, muestra una alerta
          alert("Las contraseñas deben coincidir");
        }
      });
    });
  </script>





      </form>
    </div>
</body>
</html>