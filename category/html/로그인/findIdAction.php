<?php

    include('../db.php');
    $conn = mysqli_connect($hostname, $username, $password, $database);
    $name = $_POST["name"];
    $query = "SELECT id FROM member WHERE name = $name";
    $result = mysqli_query($conn, $query);
    // True가 저장
    if($result){
        echo '<script>alert("'.$name.' 회원님의 아이디는 '.$result.' 입니다."); </script>'; 
    }
    
    // 동명이인의 경우의 예외처리?
?>