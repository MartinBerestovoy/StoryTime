<?php

include "conexionServer.php";
error_reporting(0);
session_start();

if(isset($_SESSION["username"]))
{        
  header("Location: index.php");
}

if(isset($_POST["submit"]))
{
  $_password = md5($_POST["password"]);

  $sql = "SELECT * FROM ID WHERE USERNAME = ? AND PASSWORD = ?";
  $statement = $conn -> prepare($sql);
  $statement -> bind_param("ss", $username, $password);
  $statement -> execute();
  $result = $statement -> get_result();

  if($result -> num_rows > 0)
  {
    $row = $result -> fetch_assoc();
    $_SESSION['username'] = $row['username'];
    header("Location: biblioteca.php"); 
    exit();
  }
  else
  {
    echo "<script>alert('La contraseña o el nombre de usuario son incorrectos')</script>";
  }
}

?>