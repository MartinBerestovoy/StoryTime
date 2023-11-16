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
    <br>
    <br>

     <?php

  //  $userId = $_SESSION['user_id'];
   
  //  $sql = "SELECT username FROM usuarios WHERE id = '$userId'"; // Suponiendo que la tabla se llama 'users' y la columna del nombre de usuario es 'username'.
  //  $result = $conn->query($sql);
   
  //  if (isset($_SESSION["username"])) 
  //  {
  //      $row = $result->fetch_assoc();
  //      $nombreUsuario = $row['username'];
  
  //  }
?>

    <div class="datos-perfil">
      <div class="username">
        <label>Nombre de usuario:</label>
        <input type="text" id="nombreUsuario" value="<?php echo $nombreUsuario; ?>" readonly> 
      </div>
    <br>
    <br>
    <br>
    <br>
      <button id="desloguear" href="https://instagram.com/tinchoberes">Desloguearse</button>
    </section>

    <script src="infoCuenta.js"></script>
</body>
</html>
