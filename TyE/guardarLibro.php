<?php

// include "textApi.php";
// include "./handler.php";
include "conexionServer.php";
error_reporting(0);
session_start();

$id_usuario = $_SESSION["id_usuario"];

var_dump($id_usuario);

$sql = "INSERT INTO biblioteca (text, id_usuario, titulo) VALUES ('chau', $id_usuario, '')";

 if ($stmt = $conn->prepare($sql)) 
 {
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
 
$sql = "DELETE t1 FROM biblioteca t1 JOIN biblioteca t2 ON t1.id_usuario = t2.id_usuario AND t1.texto = t2.texto WHERE t1.id_usuario = ? AND t1.id > t2.id";

$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $id_usuario);
$stmt->execute();

if ($stmt->affected_rows > 0) 
{
    echo "Versiones repetidas del libro para el usuario con ID $idUsuario eliminadas con éxito.";
} else 
{
    echo "No se encontraron versiones repetidas para el usuario con ID $idUsuario.";
}

$stmt->close();

?>