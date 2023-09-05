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
          <input type="password" id="contrasena1" placeholder="Ingrese la contraseña" oninput="validarContrasenas()" required>
          </div>
        </div>
  
        <div class="username">
          <label id="label-contrasena2"> REPETIR CONTRASEÑA</label>
          <div class="input">
          <input type="password" id="contrasena2" placeholder="Confirme la contraseña" oninput="validarContrasenas()" required>
          </div>
        </div>

        <script id="validacion">
          function validarContrasenas() {
            var contrasena1 = document.getElementById("contrasena1").value;
            var contrasena2 = document.getElementById("contrasena2").value;
            var input1 = document.getElementById("contrasena1");
            var input2 = document.getElementById("contrasena2");

            if (contrasena1 === contrasena2 && contrasena1 !== '') {
              // Pinta los bordes de verde cuando las contraseñas coinciden
              input1.style.borderColor = "green";
              input2.style.borderColor = "green";
            } else {
              // Pinta los bordes de rojo cuando las contraseñas no coinciden
              input1.style.borderColor = "red";
              input2.style.borderColor = "red";
            }
          }
        </script>

        <div class="submitBtn">
          <input type="submit" value="INICIAR">
        </div>

        <script id="check">
          function checkContrasenas() {
            var contrasena1 = document.getElementById("contrasena1").value;
            var contrasena2 = document.getElementById("contrasena2").value;
            var botonEnviar = document.getElementById("botonEnviar");

            if (contrasena1 === contrasena2 && contrasena1 !== '') {
              botonEnviar.disabled = false;
            } else {
              botonEnviar.disabled = true;
            }

            document.getElementById("miFormulario").addEventListener("submit", function(event) {
            var contrasena1 = document.getElementById("contrasena1").value;
            var contrasena2 = document.getElementById("contrasena2").value;

            if (contrasena1 !== contrasena2) {
              alert("Las contraseñas deben coincidir");
              event.preventDefault(); // Detiene la acción de envío del formulario
            }
          });
          }
        </script>

        <div class="registrarse">
        QUIERO HACER EL <a href="inicioSesion.php">INICIO SESION</a>
      </div>

      </form>
    </div>
</body>
</html>