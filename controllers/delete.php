<?php
include '../db/connection.php';

$id = $_GET['id'];

$connection->query("DELETE FROM personas where id=$id");

header("Location: ../index.php");
