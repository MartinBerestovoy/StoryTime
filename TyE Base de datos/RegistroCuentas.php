<?php

include "conexionServer.php";
error_reporting(0);
session_start();

if (isset($_SESSION["username"])) {
    header("Location: panel.php");
}

if (isset($_POST["submit"])) {
    $username = $_POST["username"];
    $password = md5($_POST["password"]);
    $cpassword = md5($_POST["cpassword"]);

    if ($password == $cpassword) {
        $sql = "SELECT * FROM ID WHERE USERNAME = '$username'";
        $result = $conn->query($sql);

        if (!$result->num_rows > 0) {
            $sql = "INSERT INTO `proyecto2023-emma` (username, password) VALUES (?, ?)";
            $result2 = $conn->prepare($sql);
            $result2->bind_param("ss", $username, $password);
            $result2->execute();

            if ($result2) {
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
}

if (isset($_POST["submit"])) {
    $password = md5($_POST["password"]);

    $sql = "SELECT * FROM ID WHERE USERNAME = ? AND PASSWORD = ?";
    $statement = $conn->prepare($sql);
    $statement->bind_param("ss", $username, $password);
    $statement->execute();
    $result = $statement->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $_SESSION['username'] = $row['username'];
        header("Location: index.php");
    } else {
        echo "<script>alert('La contraseña o el nombre de usuario son incorrectos')</script>";
    }
}
?>