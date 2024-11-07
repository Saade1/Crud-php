<?php
include '../db/connection.php';

$id = $_POST['id'];
$name = $_POST['name'];
$last_Name = $_POST['last_Name'];
$email = $_POST['email'];
$date_Birth = $_POST['date_Birth'];

$connection->query("UPDATE personas SET nombre='$name', apellido='$last_Name',email='$email',
fecha_nacimiento='$date_Birth' WHERE id=$id");

header("Location: ../index.php");
