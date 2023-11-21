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

  $tematicas = $_POST['tematicas'];
  $tematicasConcatenadas = "";

  for ($i = 0; $i < count($tematicas); $i++) {
    if ($i == 0) {
      $tematicasConcatenadas = $tematicas[0];
    } else if ($i == count($tematicas)) {
      $tematicasConcatenadas .= "y " . end($tematicas);
    } else {
      $tematicasConcatenadas .= ", " . $tematicas[$i];
    }
  }

  $personajes = $_POST['personajes'];
  $personajesConcatenados = "";

  for ($i = 0; $i < count($personajes); $i++) {
    if ($i == 0) {
      $personajesConcatenados = $personajes[0];
    } else if ($i == count($personajes)) {
      $personajesConcatenados .= "y " . end($personajes);
    } else {
      $personajesConcatenados .= ", " . $personajes[$i];
    }
  }

  $lugares = $_POST['lugares'];
  $lugaresConcatenados = "";

  for ($i = 0; $i < count($lugares); $i++) {
    if ($i == 0) {
      $lugaresConcatenados = $lugares[0];
    } else if ($i == count($lugares)) {
      $lugaresConcatenados .= "y " . end($lugares);
    } else {
      $lugaresConcatenados .= ", " . $lugares[$i];
    }
  }

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
  

  $final_prompt = "Crea un cuento el cual tenga como tematica/s " . $tematicasConcatenadas . ", que tenga de protagonista/s a " . $personajesConcatenados . " y que se lleve a cabo en " . $lugaresConcatenados;
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
  
  $_ENV = parse_ini_file(".env");

  $role = "¡Hola! Soy StoryBot, tu amigable contador de cuentos. ¿Estás listo para embarcarte en una aventura emocionante? Siéntate cómodamente y déjame llevarte a un mundo lleno de imaginación. En el mágico reino de las historias, donde los personajes cobran vida y los sueños se hacen realidad, estoy aquí para crear un cuento largo y creativo solo para ti. El cuento tiene que ser lo mas largo posible y tiene que tener un solo capitulo.";

  $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL, 'https://api.openai.com/v1/chat/completions');
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
  curl_setopt($ch, CURLOPT_HTTPHEADER, [
    'Content-Type: application/json',
    'Authorization: Bearer ' . $_ENV["openai_api_key"],
  ]);

  $data = [
    'model' => 'gpt-3.5-turbo',
    'messages' => [],
  ];

  $data['messages'][] = ['role' => 'system', 'content' => $role];
  $data['messages'][] = ['role' => 'user', 'content' => $final_prompt];

  curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
  $response = curl_exec($ch);

  $answer = "";

  $decoded_response = json_decode($response, true);
  var_dump($decoded_response);
  if (isset($decoded_response['choices'][0]['message']['content'])) {
    $answer = $decoded_response['choices'][0]['message']['content'];
  } else {
    $answer = "Este es el texto del libro";

    $title_prompt = "Genera un titulo para este libro: " . $answer;

    include "TyE/conexionServer2.php";
    error_reporting(0);
    session_start();

    if ($stmt = $conn->prepare($sql)) {
      if ($stmt->execute()) {

      } else {
        echo "Error al ejecutar la sentencia preparada: " . $stmt->error;
      }

      $stmt->close();
    } else {
      echo "Error al preparar la sentencia: " . $conn->error;
    }

  }

  curl_close($ch);

  $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL, 'https://api.openai.com/v1/chat/completions');
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
  curl_setopt($ch, CURLOPT_HTTPHEADER, [
    'Content-Type: application/json',
    'Authorization: Bearer ' . $_ENV["openai_api_key"],
  ]);

  $data = [
    'model' => 'gpt-3.5-turbo',
    'messages' => [],
  ];

  $data['messages'][] = ['role' => 'system', 'content' => $role];
  $data['messages'][] = ['role' => 'user', 'content' => $title_prompt];

  curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
  $response = curl_exec($ch);

  $title = "";

  $decoded_response = json_decode($response, true);
  var_dump($decoded_response);
  if (isset($decoded_response['choices'][0]['message']['content'])) {
    $title = $decoded_response['choices'][0]['message']['content'];
  } else {
    $title = "Este es el titulo del libro";

    $id_usuario = $_SESSION["id_usuario"];

    $sql = "INSERT INTO biblioteca (text, id_usuario, titulo) VALUES ('$answer', $id_usuario, '$title')";

    if ($stmt = $conn->prepare($sql)) {
      if ($stmt->execute()) {

      } else {
        echo "Error al ejecutar la sentencia preparada: " . $stmt->error;
      }

      $stmt->close();
    } else {
      echo "Error al preparar la sentencia: " . $conn->error;
    }

  }

  curl_close($ch);

  ?>

  <div class="contenedor">
    <img src="imgProyecto/Vector 3.svg" alt="logo" class="logo"> <!--Logo de App-->
  </div>

  <div class="h1">
    <h1 class="headline" id="titulo">LIBRO GENERADO</h1>
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