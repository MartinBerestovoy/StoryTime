<?php

$tematicas = $_POST['tematicas'];
$tematicasConcatenadas = "";

for ($i = 0; $i < count($tematicas); $i++) 
{
     if($i == 0)
     {
          $tematicasConcatenadas = $tematicas[0];
     }
     else if($i == count($tematicas))
     {
          $tematicasConcatenadas .= "y " . end($tematicas);
     }
     else
     {
          $tematicasConcatenadas .= ", " . $tematicas[$i];
     }
}

$personajes = $_POST['personajes'];
$personajesConcatenados = "";

for ($i = 0; $i < count($personajes); $i++) 
{
     if($i == 0)
     {
          $personajesConcatenados = $personajes[0];
     }
     else if($i == count($personajes))
     {
          $personajesConcatenados .= "y " . end($personajes);
     }
     else
     {
         $personajesConcatenados .= ", " . $personajes[$i]; 
     }
}

$lugares = $_POST['lugares'];
$lugaresConcatenados = "";

for ($i = 0; $i < count($lugares); $i++) 
{
     if($i == 0)
     {
          $lugaresConcatenados = $lugares[0];
     }
     else if($i == count($lugares))
     {
          $lugaresConcatenados .= "y " . end($lugares);
     }
     else
     {
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
$titulo_prompt = "Genera un titulo para el cuento";

echo $final_prompt;

// URL a la que deseas hacer la solicitud
$url = 'https://api.openai.com/v1/chat/completions';

// Inicializa una sesión cURL
$ch = curl_init($url);

// Establece opciones para la sesión cURL
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); // Hace que cURL devuelva la respuesta en lugar de imprimirla

// Ejecuta la solicitud HTTP GET
$response = curl_exec($ch);

// Verifica si hubo errores en la solicitud
if (curl_errno($ch)) 
{
    echo 'Error en la solicitud cURL: ' . curl_error($ch);
}

// Cierra la sesión cURL
curl_close($ch);

// Muestra la respuesta
echo $response;


?>