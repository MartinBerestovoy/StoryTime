<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="styles/libroGenerado.css">
</head>

<body>

  <nav class="navVolverAtras" id="contenedorBoton">
    <a onclick="volverAtras()"><img src="imgProyecto/boton-volver.png" alt="Boton de Volver" class="botonVolver">
    </a>
  </nav>

  <script>
    //script del nav
    function volverAtras() {
      window.history.back();
    }
  </script>

  <div>
    <p id="libro"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean vel ultricies velit. Donec sagittis sem sit amet consectetur venenatis. Suspendisse potenti. Duis vulputate metus sit amet magna viverra, quis lacinia dolor venenatis. Donec in tristique eros. Sed sit amet velit nec sem dictum eleifend. Curabitur eleifend vitae justo id blandit. Nam non quam in elit euismod tristique. Duis in ullamcorper nibh, vitae aliquet tortor. Phasellus ultricies dui vitae faucibus semper. Sed dignissim dui ut venenatis pellentesque. In hac habitasse platea dictumst. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Cras porta purus urna, a bibendum arcu pharetra in. Vivamus non pharetra sapien. Vivamus in suscipit libero.

      Aliquam leo magna, dignissim dictum euismod ut, efficitur a augue. Nunc tempor, felis eu dictum imperdiet, augue nisi vestibulum erat, quis tempor purus ante et nunc. Curabitur ut pretium nisi. Morbi tincidunt egestas sagittis. Nulla nulla leo, consequat et justo eu, cursus ornare sem. Sed hendrerit id nunc non convallis. Etiam augue dui, ultricies at turpis id, efficitur accumsan ipsum. Suspendisse sem nunc, maximus quis viverra in, mattis et ante. Fusce vel nisl id felis varius varius sed at nisi. Integer in lacus lacus. Proin blandit malesuada nisl, vel vestibulum enim laoreet a. Integer pretium viverra nibh, quis gravida enim imperdiet ac. Nullam quis nisl rhoncus, molestie mi quis, faucibus tortor. Cras finibus laoreet tempus. Quisque tincidunt a mauris non commodo. Etiam ante metus, luctus eu maximus quis, luctus vel ante.

      Suspendisse potenti. Sed nec ante ut tortor interdum mollis quis vulputate tellus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus suscipit, urna eu mollis euismod, nunc nisl egestas justo, et pharetra ante purus vulputate lorem. Morbi laoreet fringilla sagittis. Suspendisse libero est, ornare a dolor in, commodo dictum nisi. Nulla facilisi. Vestibulum pretium sapien eget enim blandit, quis vulputate neque aliquam. Sed ut gravida elit. Nam vehicula erat non commodo auctor. Mauris bibendum vestibulum ante, id tristique turpis sollicitudin id. Maecenas nec enim congue, malesuada nisi non, varius dolor.

      Mauris magna lectus, condimentum nec euismod non, iaculis vitae odio. Maecenas tincidunt ipsum et libero eleifend faucibus. Duis finibus rhoncus eros vel sollicitudin. Nulla ut iaculis erat. Nunc ipsum arcu, feugiat ullamcorper magna nec, pharetra condimentum ex. Cras vehicula erat erat, ac maximus diam malesuada sit amet. Aenean vitae lobortis mi. Aliquam non arcu rhoncus, laoreet arcu ac, semper mauris. Praesent sodales auctor tempor. Praesent id fringilla leo, quis interdum erat. Aliquam egestas nulla eu mauris porta accumsan. Aliquam vehicula, nunc quis feugiat auctor, ante diam laoreet est, et tristique enim est id lacus. Curabitur in ornare leo. Nulla a congue dolor, sit amet pretium tellus. Sed sagittis ipsum eget diam maximus, at volutpat sapien tempus. Ut semper fringilla dolor.

      Sed feugiat accumsan libero sit amet pretium. Quisque feugiat porttitor volutpat. Aliquam non auctor purus. Aliquam purus enim, aliquam non tempus ut, pellentesque nec nisl. Integer ultricies arcu quis rhoncus imperdiet. Ut iaculis consectetur felis, id iaculis tortor placerat vitae. Curabitur et tellus ante.
    </p>
  </div>

  <?php

  $_ENV = parse_ini_file(".env");

  function textToSpeech(string $text, string $lang, string $audioFilePath, $curl): void
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
      file_put_contents($audioFilePath, $response);
    }
  }


  $curl = curl_init();

  $text = "Hola, soy tincho.";
  $lang = "es";
  $audioFilePath = 'audios/hello_world_spanish.mp3';

  textToSpeech($text, $lang, $audioFilePath, $curl);

  ?>

  <audio controls>
    <source src="hello_world_spanish.mp3" type="audio/mpeg">
  </audio>

</body>

</html>