<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil de Usuario</title>
    <link rel="stylesheet" href="styles/infoCuenta.css">
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

  <div class="datosPerfil">
  <img src="imgProyecto/Vector 3.svg" alt="logo" class="logo"> <!--Logo de App-->
    <h1 id="titulo">INFORMACION DE CUENTA</h1>

    <form method="post" action="TyE/Login.php">
      <div class="username">
        <label id="nombre"> NOMBRE DE USUARIO</label>

        <br>

        <input type="text" id="nombreUsuario" value="<?php echo $_SESSION["username"]; ?>" readonly> 
      </div>

      <br>

    <button class="button" id="desloguear" href="index: ../logout.php">Desloguearse</button>
  </section>

    <script src="infoCuenta.js"></script>
</body>
</html>
