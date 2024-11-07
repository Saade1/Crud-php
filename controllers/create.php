<?php
include '../db/connection.php';

$name = $_POST['name'];
$last_Name = $_POST['last_Name'];
$email = $_POST['email'];
$date_Birth = $_POST['date_Birth'];

$connection->query("INSERT INTO personas (nombre,apellido, email,fecha_nacimiento) 
VALUES ('$name','$last_Name','$email','$date_Birth')");

header("Location: ../index.php");
