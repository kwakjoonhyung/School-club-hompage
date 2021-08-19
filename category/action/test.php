<?php
include('./db.php');
$conn = mysqli_connect($hostname, $username, $password, $database);

$name = $_POST["name"];
$age = $_POST["age"];

$query = "INSERT INTO test(name, age) VALUES ('$name','$age')";

$result = mysqli_query($conn, $query);

if($result){
    echo 'success inserting';
} else{
    echo 'fail to inserting';
}

mysqli_close($conn);

 ?>
