<?php
include('db.php');

$conn = mysqli_connect($hostname, $username, $password, $database, $port);

$id = $_POST["id"];
$password = $_POST["password"];

$query = "SELECT* FROM member WHERE id = '$id'";

mysqli_close($connect);
?>