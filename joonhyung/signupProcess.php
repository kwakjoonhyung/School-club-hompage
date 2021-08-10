<?php
$conn = mysqli_connect("localhost", "root", "111111","login_signin", "3306");
$hashedPassword = password_hash($_POST['password'], PASSWORD_DEFAULT);
echo $hashedPassword;
$sql = "
    INSERT INTO member4
    (id, password,address, gender, email)
    VALUES('{$_POST['id']}', '{$hashedPassword}',
    '{$_POST['address']}','{$_POST['gender']}','{$_POST['email']}'
    )";
echo $sql;
$result = mysqli_query($conn, $sql);

if ($result === false) {
    echo "저장에 문제가 생겼습니다. 관리자에게 문의해주세요.";
    echo mysqli_error($conn);
} else {
?>
    <script>
        alert("회원가입이 완료되었습니다");
        location.href = "./index.php";
    </script>
<?php
}
?>
