<?php

include('../db.php');

$conn = mysqli_connect($hostname, $username, $password, $database);

$id = $_POST["id"];
$pw = $_POST["pw"];
$pwcheck  = $_POST["pwcheck"];
$name = $_POST['name'];
$nickname = $_POST["nickname"];
$sex = $_POST['sex'];
$privilege = $_POST["type"];

// 비밀 번호가 일치하지 않으면 다시 입력
if($pw !== $pwcheck){
    echo "비밀번호를 다시 확인해주세요";
    header("Location: ./회원가입.html");
}

$query = "INSERT INTO member(id, password, name, nickname, sex, privilege) VALUES ('$id', '$pw', '$name', '$nickname', '$sex', '$privilege')";

$result = mysqli_query($conn, $query);

if($result){ // insert 쿼리 성공 시
    echo "<script>alert('success inserting');</script>";
    sleep(5);
    header("Location: ./로그인.html");
} else {
    echo "<script>alert ('fail to inserting');</script>";
    sleep(5);
    header("Location: ./회원가입.html");
}

mysqli_close($conn);
?>