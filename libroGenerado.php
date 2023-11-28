<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styles/handler.css">
  <title>Document</title>
  <link rel="stylesheet" href="styles/libroGenerado.css">
</head>

<body>

  <nav class="navVolverAtras" id="contenedorBoton">
    <a onclick="volverAtras()"><img src="imgProyecto/boton-volver.png" alt="Boton de Volver" class="botonVolver"></a>

    <?php
    if (isset($_SESSION["username"])) {
      echo '<div id="iconoCuenta">
          <a href="infoCuenta.php"><img src="imgProyecto/Group 9.svg" alt="Icono de cuenta" class="iconoCuenta"></a>
        </div>';
    }
    ?>

  </nav>

  <script>
    //script del nav
    function volverAtras() {
      window.history.back();
    }
  </script>


  <?php
  //POSIBLES CODIGOS --> CHAT GPT (((YA FUNCIONA - QUEDAN POR SI ACASO)))
  
  //OPCION 1:
// if(isset($_POST['tematicas']) && is_array($_POST['tematicas'])) {
//      $tematicas = $_POST['tematicas'];
//      $tematicasConcatenadas = implode(", ", $tematicas);
//  }
//  if(isset($_POST['personajes']) && is_array($_POST['personajes'])) {
//      $personajes = $_POST['personajes'];
//      $personajesConcatenados = implode(", ", $personajes);
//  }
//  if(isset($_POST['lugares']) && is_array($_POST['lugares'])) {
//      $lugares = $_POST['lugares'];
//      $lugaresConcatenados = implode(", ", $lugares);
//  }
  
  //OPCION 2:
//  $tematicas = $_POST['tematicas'];
//  $tematicasConcatenadas = implode(', ', $tematicas);
//  $personajes = $_POST['personajes'];
//  $personajesConcatenados = implode(', ', $personajes);
//  $lugares = $_POST['lugares'];
//  $lugaresConcatenados = implode(', ', $lugares);
  
  //OPCION 3:
//  $tematicasConcatenadas = isset($_POST['tematicas']) ? implode(', ', $_POST['tematicas']) : '';
//  $personajesConcatenados = isset($_POST['personajes']) ? implode(', ', $_POST['personajes']) : '';
//  $lugaresConcatenados = isset($_POST['lugares']) ? implode(', ', $_POST['lugares']) : '';
  
  // // URL a la que deseas hacer la solicitud
// $url = 'https://api.openai.com/v1/chat/completions';
  
  // // Inicializa una sesión cURL
// $ch = curl_init($url);
  
  // // Establece opciones para la sesión cURL
// curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); // Hace que cURL devuelva la respuesta en lugar de imprimirla
  
  // // Ejecuta la solicitud HTTP GET
// $response = curl_exec($ch);
  
  // // Verifica si hubo errores en la solicitud
// if (curl_errno($ch)) 
// {
//     echo 'Error en la solicitud cURL: ' . curl_error($ch);
// }
  
  // // Cierra la sesión cURL
// curl_close($ch);
  
  // // Muestra la respuesta
// echo $response;
    ?>

  <div class="contenedor">
    <img src="imgProyecto/Vector 3.svg" alt="logo" class="logo"> <!--Logo de App-->
  </div>

<?php
//FALTA QUE NO SE PASE EL HTML

$sql = "SELECT biblioteca.id, biblioteca.titulo, biblioteca.text FROM biblioteca JOIN usuarios ON biblioteca.id";
$result = $conn->query($sql);

if ($result) {
  if ($result->num_rows > 0) {
      $fila = $result->fetch_assoc();
      $titulo = $fila['titulo'];
      $id = $fila['id'];
      $text = $fila['text'];
  } else {
      $titulo = "Libro no encontrado o inexistente";
  }
} else {
  // Manejar errores de consulta si es necesario
  $titulo = "Error en la consulta";
}
?>

  <div class="h1">
    <h1 class="headline" id="titulo"><?php echo ($titulo) ?></h1>
  </div>

  <div class="libroGenerado">
    <p id="libro">
      <?php echo $answer; ?>
    </p>


    <br>
    <br>
    <br>
    <br>
    <br>

    <div class="audio">
      <?php

      $_ENV = parse_ini_file(".env");

      function textToSpeech(string $text, string $lang, $curl): void
      {
        curl_setopt_array($curl, [
          CURLOPT_URL => "https://text-to-speech-api3.p.rapidapi.com/speak?text=$text&lang=$lang",
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => "",
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 30,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => "GET",
          CURLOPT_HTTPHEADER => [
            "X-RapidAPI-Host: text-to-speech-api3.p.rapidapi.com",
            "X-RapidAPI-Key: $_ENV[audio_api_key]"
          ],
        ]);

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
          echo "cURL Error #:" . $err;
        } else {
          #file_put_contents($audioFilePath, $response);
          #var_dump($response);
        }
        #echo base64_encode($response);
      
        echo "
        <script>

          document.addEventListener('DOMContentLoaded', () => {
            var audioitem = document.querySelector('#audio');
            audioitem.src = 'data:audio/mp3;base64," . base64_encode($response) . "';
            console.log('" . base64_encode($response) . "');
          });
        </script>
      ";
      }


      $curl = curl_init();

      $text = $answer; // Meter el cuento
      $lang = "es";

      textToSpeech($text, $lang, $curl);

      ?>

      <audio controls id="audio">
        <source src="" type="audio/mp3">
      </audio>
    </div>
    <br>
</body>

</html>