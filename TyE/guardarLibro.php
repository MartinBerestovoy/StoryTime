<?php

//include "textApi.php";
include "handler.php";
include "conexionServer.php";
error_reporting(0);
session_start();

$sql = "INSERT INTO biblioteca (text) VALUES ($response)";

// $sql = "INSERT INTO biblioteca (text) VALUES (?)";

// if ($stmt = $conn->prepare($sql)) 
// {
//     $stmt->bind_param("s", $response); 

//     if ($stmt->execute()) 
//     {
//         echo "Datos insertados correctamente.";
//     } 
//     else 
//     {
//         echo "Error al ejecutar la sentencia preparada: " . $stmt->error;
//     }

//     $stmt->close();
// } 
// else 
// {
//     echo "Error al preparar la sentencia: " . $conn->error;
// }

?>
