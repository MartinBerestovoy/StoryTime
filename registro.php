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
  <div class="form">
    <img src="imgProyecto/logo.png" alt=""> <!--Logo de App-->
      <h1 id="titulo">REGISTRO</h1>
  
      <form method="post">
        <div class="username">
          <label id="nombre"> NOMBRE DE USUARIO</label>
          <div class="input">
            <input type="text" required>
          </div>

          <div class="username">
            <label id="email"> EMAIL</label>
            <div class="input">
              <input type="text" required>
            </div>
  
        </div>
        <div class="username">
          <label id="contrasena1"> CONTRASEÑA</label>
          <div class="input"></div>
            <input type="password" required>
          </div>
  
        <div class="username">
          <label id="contrasena2"> REPETIR CONTRASEÑA</label>
          <div class="input"></div>
          <input type="password" required>
        </div>
  
        <div class="submitBtn">
          <input type="submit" value="INICIAR">
        </div>

        <div class="registrarse">
        QUIERO HACER EL <a href="inicioSesion.php">INICIO SESION</a>
      </div>

      </form>
    </div>
</body>
</html>