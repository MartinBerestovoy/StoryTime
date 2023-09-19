<?php
include "conexionServer.php"; 
error_reporting(0);
session_start();

if(isset($_SESSION["nombre de usuario"]))
{
  header("Location: panel.php");
  exit(); // Agregamos exit() para asegurarnos de que se detenga la ejecución después de la redirección.
}

if(isset($_POST["submit"]))
{
  $username = $_POST["nombre de usuario"];
  $password = md5($_POST["contrasenia"]);
  $cpassword = md5($_POST["ccontrasenia"]);

  if($password == $cpassword)
  {
    // Consulta SQL para verificar si el nombre de usuario ya existe
    $sql = "SELECT * FROM proyecto2023_emma WHERE nombre de usuario = ?";
    $statement = $conn->prepare($sql);
    $statement->bind_param("s", $username);
    $statement->execute();
    $result = $statement->get_result();

    if($result->num_rows == 0)
    {
      // Consulta SQL para insertar un nuevo usuario
      $sql = "INSERT INTO proyecto2023_emma (nombre de usuario, contrasenia) VALUES (?, ?)";
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
  $username = $_POST["nombre de usuario"];
  $password = md5($_POST["contrasenia"]);

  // Consulta SQL para verificar el inicio de sesión
  $sql = "SELECT * FROM proyecto2023_emma WHERE nombre de usuario = ? AND contrasenia = ?";
  $statement = $conn->prepare($sql);
  $statement->bind_param("ss", $username, $password);
  $statement->execute();
  $result = $statement->get_result();

  if($result->num_rows > 0)
  {
    $row = $result->fetch_assoc();
    $_SESSION['nombre de usuario'] = $row['nombre de usuario'];
    header("Location: index.php"); 
    exit(); // Agregamos exit() después de la redirección.
  }
  else
  {
    echo "<script>alert('La contraseña o el nombre de usuario son incorrectos')</script>";
  }
}
?>
Este código corrige los errores identificados y organiza de manera más eficiente las consultas SQL y la lógica de manejo de sesiones y formularios. Asegúrate de que la tabla en la base de datos se llame "proyecto2023_emma" y que las columnas sean "username" y "password", y que estés usando un hash seguro para almacenar contraseñas en la base de datos.







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