<?php
$server = 'localhost';
$user = 'root';
$contraseña = '';
$database = 'crud php';

$connection = new mysqli($server, $user, $contraseña, $database);

if ($connection->connect_error) {
    die('error de conexión: ' . $connection->connect_error);
}
