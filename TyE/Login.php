<?php

include "conexionServer.php";
session_start();

$username = $_POST["username"];
$password = md5($_POST["password"]);

$sql = "SELECT * FROM usuarios WHERE username = ? AND password = ?";
$statement = $conn->prepare($sql);
$statement->bind_param("ss", $username, $password);
$statement->execute();
$result = $statement->get_result();

if ($result->num_rows > 0) 
{
    $row = $result->fetch_assoc();
    $_SESSION['username'] = $row['username'];
    $_SESSION["id_usuario"] = $row["id"];
    echo '<script>alert("Inicio de sesión exitoso, momento de crear!");';
    echo 'window.location.href="../biblioteca.php";</script>';
    exit();
} 
else 
{
    echo '<script>alert("No hay ninguna cuenta iniciada! Intenta nuevamente iniciar sesion o create una cuenta!");';
    echo 'window.location.href="../inicioSesion.php";</script>';
    exit();
}
?>