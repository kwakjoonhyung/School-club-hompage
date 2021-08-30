<?php
    session_start();
    include('../db.php');
    $conn = mysqli_connect($hostname, $username, $password, $database);

    $id = $_POST['id'];
    $password = $_POST["pw"];

    $query = "SELECT * FROM member WHERE id = '$id'";
    $result = mysqli_query($conn, $query);
    if(mysqli_num_rows($result)){ // 아이디가 있다면
        $row = mysqli_fetch_assoc($result);
        if($row['password'] == $password){
            $_SESSION['id'] = $id;
            $_SESSION['name'] = 
            if(isset($_SESSION['id'])){
                ?>
                <script>
                    alert('login success');
                    location.replace('../첫페이지.php');
                </script> <?php
            } else{
                echo "session failed";
            }
        } else { // password가 잘못 되었을 때
            ?> <script>
                    alert('아이디 혹은 비밀번호가 잘못되었습니다.');
                    history.back();
                </script>
    <?php }
    } else {
        ?> <script> 
            alert('아이디 혹은 비밀번호가 잘못 되었습니다.');
            history.back();
        </script>
        <?php
    }
    
    mysqli_close($conn);

?>