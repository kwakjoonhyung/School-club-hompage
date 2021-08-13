<?php

include('db.php');

$conn = mysqli_connect($hostname, $username, $password, $database, $port);

$name = $_POST["name"];
$age = $_POST["age"];

$query = "insert into test(name, age) values ($name, $age)";

mysqli_query($conn, $query);

if($conn->query($query)){
    echo 'success inserting';
} else{
    echo 'fail to inserting';
}

mysqli_close($connect);

 ?>
