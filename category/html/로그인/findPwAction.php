<?php

    include('../db.php');
    $conn = mysqli_connect($hostname, $username, $password, $database);
    $name = $_POST["name"];
    $query = "SELECT id FROM member WHERE name = $name";
    $result = mysqli_query($conn, $query);
    // result에는 db에서 검색한 id값이 저장된다. 
    echo '<script>alert("'.$name.' 회원님의 아이디는 '.$result.' 입니다."); </script>'; 
?>