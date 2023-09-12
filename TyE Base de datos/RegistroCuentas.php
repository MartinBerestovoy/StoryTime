<?php

//programacion del registro. si el nombre esta en la base de datos no permite registrarse con ese nombre

include "conexionServer.php"; 
error_reporting(0);
session_start();

if(isset($_SESSION["username"]))
{
  header("Location: panel.php");
}

if(isset($_POST["submit"]))
{
  $username = $_POST["username"];
  $password = md5 ($_POST["password"]);
  $cpassword = md5 ($_POST["cpassword"]);

  if($password == $cpassword)
  {
    $sql = "SELECT * FROM ID WHERE USERNAME = '$username'"; //XQ SOLICITA EL ID DEL USUARIO CONDO TODAVIA NO SE REGISTRO. SERA EL ERROR?!?!?!?!
    $result = mysqli_query($conn, $sql);

    if(!$result->num_rows > 0 )
    {
      $sql = "INSERT INTO proyecto2023-emma (username,password) VALUE ('$username','$password')";
      $result = mysqli_query($conn, $sql);

      if($result)
      {
        echo "<script>alert('Usuario registrado con exito')</script>";
        $username = "";
        $_POST["password"] = "";
        $_POST["cpassword"] = "";
      }
      else
      {
        echo "<script>alert('Hay un error')</script>";

      }
    }
    else
    {
      echo "<script>alert('El nombre de usuario ya esta en uso')</script>";
    }
  }
  else
  {
    echo "<script>alert('Las contraseñas no coinciden')</script>";
  }
}

?>

<?php

include "confide.php";
session_start();
error_reporting(0);

if(isset($_SESSION["username"]));
{        
  header("Location: index.php");
}

if(isset($_POST["submit"]))
{
  $_password = md5($_POST["password"]);

  $sql = "SELECT * FROM ID WHERE USERNAME = '$username' AND password = '$password'";
  $result = mysqli_query($conn, $sql);

  if($result -> num_rows > 0)
  {
    $row = mysqli_fetch_assoc($result);
    $_SESSION ['username'] = $row ['username'];
    header("Location: index.php");
  }
  else
  {
    echo "<script>alert('La contraseña o el nombre de usuario son incorrectos')</scripts>";
  }
}



?>