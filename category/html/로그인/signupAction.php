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

//name이 sex인 아이디 박스에서 체크된 태그의  value값을 가져옴
//회원가입.html파일에서 name=sex인 부분을 보면 value에 man,woman값이 각각 쓰여있어서
//체크된 부분의 값을 가져옴. 만약 남자에 체크했다면 $sex의 값은 man이 될 것
// $sex = $_POST['sex'];
//아래 코드로 출력해서 확인해보세여~~
// echo "$sex";

//동아리 회원/동아리장 라디오버튼 체크여부도 위와 같이 체크 가능. 그 값 기반으로 if-else문 돌리면 될듯?

//아래코드는 안내문 띄워주고 회원가입.html로 이동하는 코드
//signupAction.php는 회원가입 처리(정보 받아와서 db에 저장)만 하기 때문에 처리 후 특정 페이지로 돌려보내줘야함.
// echo "<script>alert('회원가입이 완료되었습니다. 로그인 페이지로 이동합니다')</script>";
// echo "<script>location.href='회원가입.html'</script>";
?>