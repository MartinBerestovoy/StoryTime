<?php
include "conexionServer.php"; 
error_reporting(0);
session_start();

if(isset($_SESSION["username"]))
{
  header("Location: panel.php");
  exit(); // Agregamos exit() para asegurarnos de que se detenga la ejecución después de la redirección.
}

if(isset($_POST["submit"]))
{
  $username = $_POST["username"];
  $password = md5($_POST["password"]);
  $cpassword = md5($_POST["cpassword"]);

  if($password == $cpassword)
  {
    // Consulta SQL para verificar si el nombre de usuario ya existe
    $sql = "SELECT * FROM proyecto2023_emma WHERE username = ?";
    $statement = $conn->prepare($sql);
    $statement->bind_param("s", $username);
    $statement->execute();
    $result = $statement->get_result();

    if($result->num_rows == 0)
    {
      // Consulta SQL para insertar un nuevo usuario
      $sql = "INSERT INTO proyecto2023_emma (username, password) VALUES (?, ?)";
      $statement = $conn->prepare($sql);
      $statement->bind_param("ss", $username, $password);

      if($statement->execute())
      {
        echo "<script>alert('Usuario registrado con éxito')</script>";
        $username = "";
      }
      else
      {
        echo "<script>alert('Hubo un error al registrar el usuario')</script>";
      }
    }
    else
    {
      echo "<script>alert('El nombre de usuario ya está en uso')</script>";
    }
  }
  else
  {
    echo "<script>alert('Las contraseñas no coinciden')</script>";
  }
}

if(isset($_POST["submit"]))
{
  $username = $_POST["username"];
  $password = md5($_POST["password"]);

  // Consulta SQL para verificar el inicio de sesión
  $sql = "SELECT * FROM proyecto2023_emma WHERE username = ? AND password = ?";
  $statement = $conn->prepare($sql);
  $statement->bind_param("ss", $username, $password);
  $statement->execute();
  $result = $statement->get_result();

  if($result->num_rows > 0)
  {
    $row = $result->fetch_assoc();
    $_SESSION['username'] = $row['username'];
    header("Location: index.php"); 
    exit(); // Agregamos exit() después de la redirección.
  }
  else
  {
    echo "<script>alert('La contraseña o el nombre de usuario son incorrectos')</script>";
  }
}
?>








/*
ULTIMOS CAMBIOS: result --> result2 || mysqli_fetch_assoc -->mysqli_fetch  
REVIAR COMILLAS DE ('proyecto2023-emma')

CODIGO CORRECTO? QUE VIGI LO REVISE
if(isset($_POST["submit"]))

{
  $_password = md5($_POST["password"]);

  $sql = "SELECT * FROM ID WHERE USERNAME = ? AND PASSWORD = ?";
  $statement = $conn->prepare($sql);
  $statement->bind_param("ss", $username, $password);
  $result = $statement -> execute();

  if($result -> num_rows > 0)
  {
    $row = result -> fetch_assoc;
    $_SESSION['username'] = $row['username'];
    header("Location: index.php"); 
    exit();
  }
  else
  {
    echo "<script>alert('La contraseña o el nombre de usuario son incorrectos')</script>";
  }
}

*/