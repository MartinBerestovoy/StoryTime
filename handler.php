<?php

//le agregue '[]' a la referencia de los arrays (despues del '$_POST')

var_dump($_POST);

$tematicas = $_POST['tematicas[]'];
$tematicasConcatenadas = "";

for ($i = 0; $i <= count($tematicas); $i++) {
     $tematicasConcatenadas .= ", " . $tematicas[$i];
}

$personajes = $_POST['personajes[]'];
$personajesConcatenados = "";

for ($i = 0; $i <= count($personaje); $i++) {
     $personajesConcatenados .= ", " . $personajes[$i];
}

$lugares = $_POST['lugares[]'];
$lugaresConcatenados = "";

for ($i = 0; $i <= count($lugares); $i++) {
     $lugaresConcatenados .= ", " . $lugares[$i];
}


$final_prompt = "Crea un cuento el cual tenga como tematica/s " . $tematicasConcatenadas . ", que tenga de protagonista/s a " . $personajesConcatenados . " y que se lleve a cabo en " . $lugaresConcatenados;
$titulo_prompt = "Genera un titulo para el cuento"

?>


<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
     <script>
          $(document).ready(function() {
               // Handler para enviar la pregunta al hacer Enter en el input
               $('#input-question').keypress(function(event) {
                    if (event.keyCode === 13) {
                         event.preventDefault();
                         var pregunta = $(this).val();
                         realizarPregunta(pregunta);
                         
                    }
               });
               
          });

          function realizarPregunta(pregunta) {
               // Realizar la solicitud al servidor PHP
               $.ajax({
                    type: "POST",
                    url: "textApi.php",
                    data: {
                         mensaje: final_prompt
                         //???????
                    },
                    success: function(respuesta) {
                         echo(respuesta);
                    }
               });
          }
     </script>
</body>

</html>