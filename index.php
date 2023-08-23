<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title>Document</title>
</head>
<body>
  <section id="inicio">
    <img src="imgProyecto/logo.png" alt=""> <!--Logo de App-->
    <h1 id="titulo">STORY TIME</h1>
    <div>
      <button><a href="inicioSesion.html" class="button">INICIA SESIÓN</a></button>
    </div>
    <br>
    <div>
      <button><a href="registro.html" class="button">REGISTRARSE</a></button>
    </div>
    <br>
    <div>   
      <button><a href="crearLibro.html" class="button"> INICIA COMO INVITADO </a></button>
    </div>
    <br>
  </section>
    
</body>
</html>

<?php  
$_ENV = parse_ini_file('.env');


  $mysqli = mysqli_init();
  $mysqli->ssl_set(NULL, NULL, "cacert.pem", NULL, NULL);
  $mysqli->real_connect($_ENV["HOST"], $_ENV["USERNAME"], $_ENV["PASSWORD"], $_ENV["DATABASE"]);


  $result = $mysqli->query('SELECT * FROM users');
  while($row = $result->fetch_assoc())
  {
    echo $row["PersonID"] . "\n <br>";
    echo $row["FirsName"];
  }


  $mysqli->close();


?>
