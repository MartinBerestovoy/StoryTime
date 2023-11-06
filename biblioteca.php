<?php session_start();?>
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


    <div class="libro">
      <label class="tituloLibro">TITULO DE LIBRO</label>
     
     
      <?php
// Configurar las variables de conexión a la base de datos
$servername = "localhost";
$username = "tu_usuario";
$password = "tu_contraseña";
$dbname = "tu_base_de_datos";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
  die("La conexión ha fallado: " . $conn->connect_error);
}

// Consulta SQL para obtener los títulos de los libros
$sql = "SELECT text FROM biblioteca";
$result = $conn->query($sql);

// Verificar si la consulta devuelve filas
if ($result->num_rows > 0) {
  // Salida de datos de cada fila
  while($row = $result->fetch_assoc()) {
    // strtok() se usa aquí para obtener el substring hasta el primer salto de línea (\n)
    $tituloCortado = strtok($row["titulo"], "\n");
    echo '<div class="libro">';
    echo '<label class="tituloLibro">'. $tituloCortado. '</label>';
    echo '<label class="contenidoLibros">';
    // Aquí podrías añadir más información de cada libro si fuera necesario
    echo '</label>';
    echo '</div>';
  }
} else {
  echo "0 resultados";
}

// Cerrar la conexión
$conn->close();
?>

     
     
     
   
     <?php // Consulta SQL para obtener los títulos de los libros
$sql = "SELECT biblioteca FROM text"; // cortar el string hasta 1er enter
$result = $conn->query($sql);

// Verificar si la consulta devuelve filas
if ($result->num_rows > 0) {

  // Salida de datos de cada fila
  while($row = $result->fetch_assoc()) {
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

// Cerrar la conexión
$conn->close();
?>
      </label>
    </div>
  </section>
  
  <br>

</body>
</html>