<?php
    session_start();

    $connect = mysqli_connect();
    // db 정보 입력하기 

    $id = $_POST["id"];
    $pw = $_POST["pw"];
    $name = $_POST['_name'];
    $nickname = $_POST["nickname"];
    $sex = $_POST["sex"];
    $type = $_POST["type"];
    // 변수 설정

    $query = "INSERT into member(member_id, member_password, member_name, member_nickname, member_sex, member_privilege) VALUES ('$id', '$pw', '$name', '$nickname', '$sex', '$type')";   
    
    $result = $connect -> query($query);
    

    if($result){
        ?>
        <script>
        alert('가입 되었습니다.\n로그인 화면으로 이동합니다.'); 
        location.replace("./login.php");
        </script>
<?php   }
    else{
        ?> <script>
            alert("fail");
            </script>
<?php   }
        mysqli_close($connect);
?>