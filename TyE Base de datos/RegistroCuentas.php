<?php

//programacion del registro. si el nombre esta en la base de datos no permite registrarse con ese nombre

include "conexionServer.php";
error_reporting(0);
session_start();

if (isset($_SESSION["username"])) {
  header("Location: panel.php");
}

var_dump($_POST);

// if(isset($_POST["submit"]))
// {
$username = $_POST["username"];
$password = md5($_POST["password"]);
$cpassword = md5($_POST["cpassword"]);

if ($password == $cpassword) {
  $sql = "SELECT * FROM usuarios WHERE username = '" . $username . "'";
  $result = $conn->query($sql);

  // var_dump($result);

  if ($result->num_rows === 0) {
    $sql = "INSERT INTO usuarios (username, password) VALUES (?, ?)"; //las comillas (`proyecto2023-emma`) no se si esten bien, DEJENLAS
    $result2 = $conn->prepare($sql);
    $result2->bind_param("ss", $username, $password);
    $result2->execute();

    if ($result2) {
      var_dump($result2);
      echo "<script>alert('Usuario registrado con exito')</script>";
      $username = "";
      $_POST["password"] = "";
      $_POST["cpassword"] = "";
    } else {
      echo "<script>alert('Hay un error')</script>";
    }
  } else {
    echo "<script>alert('El nombre de usuario ya esta en uso')</script>";
  }
} else {
  echo "<script>alert('Las contraseñas no coinciden')</script>";
}
// }

?>