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

  <script>
    //script del nav
    function volverAtras() {
      window.history.back();
    }
  </script>

  <div class="form">
  <svg xmlns="http://www.w3.org/2000/svg" width="107" height="84" viewBox="0 0 107 84" fill="none"> <!-- logo de App-->
      <g filter="url(#filter0_d_188_7)">
        <path fill-rule="evenodd" clip-rule="evenodd" d="M91 1.5V1L90.5 0.5L90 0H89.5H64.5L60.5 1L56.5 3.5L54 6.5L53.5 7.5H52.5V7L51 5L49.5 3.5L48 2.5L46 1.5L44.5 1L43 0.5H42H41H40.5H40H18H17.5H16.5H16H15.5H15V1.5V2V8V8.5H13.5H6.5H6H5.5H5L4.5 9L4 9.5V10V58V66.5V68L4.5 68.5L5 69H5.5H41H42.5H44L45 69.5L46.5 70.5L47.5 71L49 72L50 73L51.5 75L52 76H52.5H53H53.5L54.5 75L55.5 73.5L57.5 71.5L61 69.5L65.5 69H72.5H99H101H101.5L102 68.5L102.5 68V30V10V9.5L102 9L101.5 8.5H101H92H91.5H91V1.5ZM90 59H88.5H85H73H68L63.5 60L60 62.5L57.5 65L55.5 68L55 70L55.5 69.5L57.5 68.5L61 67L62 66.5H63H64.5H70.5H94H99.5V66V65V52.5V13.5V11H92.5H91.5H91V56.5V57.5V58L90.5 58.5L90 59ZM88.5 4V8.5V9V11V56.5H87H80.5H67L64.5 57L61.5 58L59.5 59L57 61L56 62L55.5 63V63.5L54.5 65V64V20.5V13L55 11L55.5 9.5L56.5 7.5L58.5 5.5L61.5 3.5L65 2.5H67.5H78.5H88.5V3V4ZM52 37V58V66L50 63L49 61.5L47 60L44 58L39 56.5H34H18V54V20.5V2.5H19H35.5H42.5L47 4.5L49 6L52 11V37ZM48 63.5L51 69.5H50.5L49.5 69L47.5 67.5L46 66.5L43.5 66H41.5H36.5H24H13.5H6.5V57V21V13V11H9H15V11.5V17.5V54.5V58V58.5L16 59H17H19.5H39L44 60.5L48 63.5Z" fill="black"/>
      </g>
      <defs>
        <filter id="filter0_d_188_7" x="0" y="0" width="106.5" height="84" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
          <feFlood flood-opacity="0" result="BackgroundImageFix"/>
          <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
          <feOffset dy="4"/>
          <feGaussianBlur stdDeviation="2"/>
          <feComposite in2="hardAlpha" operator="out"/>
          <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0"/>
          <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_188_7"/>
          <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_188_7" result="shape"/>
        </filter>
      </defs>
    </svg> <!-- logo de App-->
    <h1 id="titulo">REGISTRO</h1>

    <form action="TyE Base de datos/RegistroCuentas.php" method="post">
      <div class="username">
        <label id="nombre"> NOMBRE DE USUARIO</label>
        <div class="input">
          <input type="text" name="username" placeholder="INGRESE EL NOMBRE DE USUARIO" required>
        </div>
      </div>

      <div class="username">
        <label id="label-contrasena1"> CONTRASEÑA</label>
        <div class="input">
          <input name="password" type="password" id="contrasena1" placeholder="INGRESE LA CONTRASEÑA" oninput="validarContrasenas()" onkeyup="checkContrasenas()" required>
        </div>
      </div>

      <div class="username">
        <label id="label-contrasena2"> REPETIR CONTRASEÑA</label>
        <div class="input">
          <input name="cpassword" type="password" id="contrasena2" placeholder="CONFIRME LA CONTRASEÑA" oninput="validarContrasenas()" onkeyup="checkContrasenas()" required>
        </div>
      </div>

      <div class="submitBtn">
        <input type="submit" id="botonEnviar" value="INICIAR">
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
      </script>

      <title>Comprobar contraseñas</title>
      <script>
        // Esta función se llama cuando se hace clic en el botón "submit"
        function CoincideAlEnviar() {
          var contrasena1 = document.getElementById("contrasena1").value;
          var contrasena2 = document.getElementById("contrasena2").value;

          // Si las contraseñas no coinciden, se muestra una alerta y se evita el envío del formulario
          if (contrasena1 !== contrasena2) {
            alert("Las contraseñas no coinciden");
            return false; // Esto evita que el formulario se envíe
          }

          // Si las contraseñas coinciden, el formulario se enviará normalmente
          return true;
        }
      </script>

    </form>
  </div>
</body>

</html>