<?php

session_start();

$hostname = '27.96.129.65';
$username = 'aaa';
$password = '1234';
$database = 'web_project';
$port = 3306;

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

// mysqli_close($connect);

 ?>
