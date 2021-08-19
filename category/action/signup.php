<?php
    include('./db.php');

    $conn = mysqli_connect($hostname, $username, $password, $database);

    $id = $_POST["id"];
    $pw = $_POST["pw"];
    $name = $_POST['_name'];
    $nickname = $_POST["nickname"];
    $sex = $_POST["sex"];
    $privilege = $_POST["type"];
    // 변수 설정

    $query = "INSERT into member(id, password, name, nickname, sex, privilege) VALUES ('$id', '$pw', '$name', '$nickname', '$sex', '$privilege')";

    $result = mysqli_query($conn, $query);
    if($result){ // insert 쿼리 성공 시
      echo "<script>alert('success inserting');</script>";
        sleep(5);
        header("Location: ../html/로그인.html");
    } else {
        echo "<script>alert ('fail to inserting');</script>";
        sleep(5);
        header("Location: ../html/회원가입.html");
    }
        mysqli_close($connect);
?>
