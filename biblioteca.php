<?php 
session_start();
include_once("./conexionServer.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/biblioteca.css">
    <title>Document</title>
</head>
<body>

<nav class="navVolverAtras" id="contenedorBoton">
    <div class="botonVolver">
      <a onclick="volverAtras()"><img src="imgProyecto/image 6.svg" alt="Boton de Volver" class="botonVolver"></a>
    </div>

    <?php 
    
    if (isset($_SESSION["username"])) {
      echo '<div id="iconoCuenta" >
        <a href="infoCuenta.php"><img src="imgProyecto/Group 9.svg" alt="Icono de cuenta" class="iconoCuenta"></a>
      </div>';
    }
    ?>

  </nav>

  <script> //script del nav
    function volverAtras() {
    window.history.back();
    }
  </script>

  
  <img src="imgProyecto/Vector 3.svg" alt="logo" class="logo"> <!--Logo de App-->
  <h1 id="titulo">BIBLIOTECA</h1>

  <br>
  <br>
  
  <section class="libros">

  <a id="mas" href="crearLibro.php"> 
  <svg width="35" height="64" viewBox="0 0 35 64" fill="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M13.9091 43.6136V21.1136H17.7273V43.6136H13.9091ZM4.56818 34.2727V30.4545H27.0682V34.2727H4.56818Z" fill="black"/>
  </svg>

  </a>


  <a class="libro">
      <label class="tituloLibro">TITULO DE LIBRO</label>
      <a href="handler.php">class="tituloLibro"></a>
  </a>
  
      <?php


// Verificar conexión
if ($conn->connect_error) {
  die("La conexión ha fallado: " . $conn->connect_error);
}

// Asegúrate de que $id está definida y es segura
if (isset($_SESSION["id_usuario"])) {
  $id = $conn->real_escape_string($id); // Escapa la variable para prevenir inyección SQL

  // Consulta SQL para obtener los títulos de los libros
  $sql = "SELECT biblioteca.text, biblioteca.titulo FROM biblioteca JOIN usuarios ON biblioteca.id_usuario = usuarios.id WHERE usuarios.id = '". $_SESSION["id_usuario"]."'";
  
  $result = $conn->query($sql);

  var_dump($result);

  // Verificar si la consulta fue exitosa
  if ($result) {
      // Verificar si la consulta devuelve filas
      if ($result->num_rows > 0) {
          // Salida de datos de cada fila
          while ($row = $result->fetch_assoc()) {
              // strtok() se usa aquí para obtener el substring hasta el primer salto de línea (\n)
              // $tituloCortado = htmlspecialchars(strtok($row["text"], "\n"));
              echo '<div class="libro">';
              echo '<label class="tituloLibro">'. $row["titulo"]. '</label>';
              echo '<label class="contenidoLibros">';
              // Aquí podrías añadir más información de cada libro si fuera necesario
              echo '</label>';
              echo '</div>';
          }
      } else {
          echo "0 resultados";
      }
  } else {
      echo "Error en la consulta: " . $conn->error;
  }
} else {
  echo "ID no definido";
}

// Cerrar la conexión
?>

     
     
     
   
      </label>
</a>
  </section>
  
  <br>

</body>
</html>