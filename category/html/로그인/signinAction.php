<?php

//name이 sex인 아이디 박스에서 체크된 태그의  value값을 가져옴
//회원가입.html파일에서 name=sex인 부분을 보면 value에 man,woman값이 각각 쓰여있어서
//체크된 부분의 값을 가져옴. 만약 남자에 체크했다면 $sex의 값은 man이 될 것
$sex = $_POST['sex'];
//아래 코드로 출력해서 확인해보세여~~
echo "$sex";

//동아리 회원/동아리장 라디오버튼 체크여부도 위와 같이 체크 가능. 그 값 기반으로 if-else문 돌리면 될듯?




//아래코드는 안내문 띄워주고 회원가입.html로 이동하는 코드
//signinAction.php는 회원가입 처리(정보 받아와서 db에 저장)만 하기 때문에 처리 후 특정 페이지로 돌려보내줘야함.
// echo "<script>alert('회원가입이 완료되었습니다. 로그인 페이지로 이동합니다')</script>";
// echo "<script>location.href='회원가입.html'</script>";
?>