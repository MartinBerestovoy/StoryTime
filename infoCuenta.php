<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil de Usuario</title>
    <link rel="stylesheet" href="styles/infoCuenta.css">
</head>
<body>
  <section class="perfil-container">
    <div class="foto-perfil">
      <img src="ruta/por/defecto.jpg" alt="Foto de perfil" id="foto">
      <br>
      <div class="custom-file-upload"> <!-- cosito para poner tu propia foto de tus archivos -->
        <label for="cargarFoto" class="file-upload-label">
            Subir imagen
        </label>
        <input type="file" id="cargarFoto" class="file-upload-input">
    </div> 
    </div>
    <br>
    <div class="datos-perfil">
      <div class="username">
        <label>Nombre de usuario:</label>
        <input type="text" id="nombreUsuario" readonly>
      </div>
      <br>
      <div class="email"></div>
        <label>Email:</label>
        <input type="text" id="email" readonly>
      </div>
      <br>
      <div class="contrasena">
        <label>Contraseña:</label>
        <br>
        <input type="password" id="password" readonly>
      </div>
    </div>
    <br>
    <br>
      <button id="desloguear">Desloguearse</button>
    </section>

    <script src="infoCuenta.js"></script>
</body>
</html>
