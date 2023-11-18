<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles/inicioSesion.css">
</head>
<body>

  <nav class="navVolverAtras" id="contenedorBoton">
    <a onclick="volverAtras()"><img src="imgProyecto/image 6.svg" alt="Boton de Volver" class="botonVolver">
    </a>
  </nav>

  <script> //script del nav
    function volverAtras() {
    window.history.back();
    }
  </script>

  <div class="form">
  <img src="imgProyecto/Vector 3.svg" alt="logo" class="logo"> <!--Logo de App-->
    <h1 id="titulo">INICIO DE SESION</h1>

    <form method="post" action="TyE/Login.php">
      <div class="username">
        <label id="nombre"> NOMBRE DE USUARIO</label>
        <div class="input">
          <input type="text" id="usuario" placeholder="INGRESE EL USUARIO" name="username" required>
        </div>

      </div>
      <div class="username">
        <label id="label-contrasena"> CONTRASEÑA</label>
        <div class="input"></div>
          <input type="password" id="contrasena" placeholder="INGRESE LA CONTRASEÑA" name="password" required>
        </div>

      <div class="submitBtn">
        <input type="submit" value="INICIAR">
      </div>

      <div class="registrarse">
        QUIERO HACER EL <a href="registro.php">REGISTRO</a>
      </div>
    </form>
  </div>
</body>
</html>