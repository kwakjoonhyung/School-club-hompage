<?php
        error_reporting(E_ALL);
        ini_set('display_errors',1);
    include('./category/html/db.php');
    $conn = mysqli_connect($hostname, $username, $password, $database);

    $title = $_POST['title'];
    $name = $_POST['author'];
    $pw = $_POST['pw'];
    $content = $_POST['content'];
    $date = date("Y-m-d H:i:s");

    $query = "INSERT * FROM board(title, content, name, pw,date) VALUES ('$title', '$content', '$name', '$pw','$date' ";
    $result = mysqli_query($conn, $query);
    if($result){
        echo "<script>alert('success writing');</script>";
        // 작성한 글로 이동하는 코드 추가 (Get Mapping?)
    }   else{
        echo "<script> alert('fail to writing!')</script>";
        echo "<script>history.back(); </script>";
    }
?>