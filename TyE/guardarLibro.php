<?php

// include "textApi.php";
include "handler.php";
include "conexionServer.php";
error_reporting(0);
session_start();

$id_usuario = $_SESSION["id_usuario"];

$sql = "INSERT INTO biblioteca (text, id_usuario) VALUES ($response, $id_usuario)";



 if ($stmt = $conn->prepare($sql)) 
 {
     $stmt->bind_param("s", $response); 

     if ($stmt->execute()) 
     {
         echo "Datos insertados correctamente.";
     } 
     else 
     {
         echo "Error al ejecutar la sentencia preparada: " . $stmt->error;
     }

     $stmt->close();
 } 
 else 
 {
     echo "Error al preparar la sentencia: " . $conn->error;
 }

?>
