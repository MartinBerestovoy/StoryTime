<?php

include "textApi.php";
include "conexionServer.php";
error_reporting(0);
session_start();

$sql = "INSERT INTO biblioteca (titulo, text) VALUES ($title, $answer)"; //variables separadas o todo en una variable?


?>
