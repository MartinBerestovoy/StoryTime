<?php

include "conexionServer.php";
session_start();

if(isset($_SESSION["username"]))
{        
  header("Location: ../bibilioteca.php");
}

var_dump($_POST);
  $username = $_POST["username"];
  $password = md5($_POST["password"]);

  echo $password;

  $sql = "SELECT * FROM usuarios WHERE username = ? AND password = ?";
  $statement = $conn -> prepare($sql);
  $statement -> bind_param("ss", $username, $password);
  $statement -> execute();
  $result = $statement -> get_result();

  var_dump($result);

  if($result -> num_rows > 0)
  {
    $row = $result -> fetch_assoc();
    $_SESSION['username'] = $row['username'];
    $_SESSION["id_usuario"] = $row["id"];
    var_dump($_SESSION);
    // header("Location: ../biblioteca.php"); 
    exit();
  }
  else
  {
    echo "La contraseña o el nombre de usuario son incorrectos";
  }


?>