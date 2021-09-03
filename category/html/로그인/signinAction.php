<?php
    session_start();
    include('../db.php');
    $conn = mysqli_connect($hostname, $username, $password, $database);

    $id = $_POST['id'];
    $password = $_POST["pw"];
    $idpwSaveCheck = $_POST["idpwSaveCheck"];
    // 체크되어있는 경우 y 값이 담김

    $query = "SELECT * FROM member WHERE id = '$id'";
    $query2 = "SELECT name FROM member WHERE id = $id";
    $result = mysqli_query($conn, $query);
    $name = mysqli_query($conn, $query2); // name값이 저장
    if(mysqli_num_rows($result)){ // 아이디가 있다면
        $row = mysqli_fetch_assoc($result);
         //  아이디/비밀번호 저장 메소드 
            if($idpwSaveCheck == 'y') {
                setcookie("c_id", $id, (time()+ 3600 * 24* 30), "/");
                echo '<script>console.log("cookie is setting"); </script>'; 
                sleep(2);
            }
        if($row['password'] == $password){
            $_SESSION['id'] = $id;
            $_SESSION['name'] = $name;
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