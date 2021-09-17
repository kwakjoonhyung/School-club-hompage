<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../../css/마이페이지.css">

	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<title>Document</title>
</head>
<body>

	<div id="head">
		<ul>
			<li>처음으로</li>
			<li>로그아웃</li>
			<li>마이페이지</li>
		</ul>
	</div>
	<div style="height: 50px;">

	</div>
	<div id="photo">
		<h2>마이페이지</h2>
	</div>
		<div class="part-5">
			<h2>마이페이지</h2>
			<div class="head">
				<!--
				ul>li*4>a[href=#]{메뉴 아이템 $}
				-->
				<ul>
					<li class="active"><a href="#">메뉴 아이템 1</a></li>
					<li><a href="#">메뉴 아이템 2</a></li>
					<li><a href="#">메뉴 아이템 3</a></li>
					<li><a href="#">메뉴 아이템 4</a></li>
				</ul>
			</div>
			<div class="body">
				<!--
				div*4
				-->
				<div class="active">내용 1</div>
				<div>내용 2</div>
				<div>내용 3</div>
				<div>내용 4</div>
			</div>
		</div>


		<script>
			$('.part-5 .head > ul > li').click(function() {
		// 클릭된 당사자 => this
		// 이 함수를 실행한 주어 => this
		// 굳이 포장을 하는 이유
		var $클릭된_녀석 = $(this);
		
		var $part5 = $클릭된_녀석.closest('.part-5');
		//var $part5 = $클릭된_녀석.parent().parent().parent(); // $part5를 얻는 또 다른 방법
		// 오직 $part5 안에서만 .body 로 검색해서 나온 것들 포장해주세요.
		var $body = $part5.find('.body');
		
		// 기존에 active 가진 녀석에게 active 빼앗기
		$클릭된_녀석.parent().find('.active').removeClass('active');
		$클릭된_녀석.addClass('active');
		
		// 클릭된 녀석이 형제 중에서 몇 번째 인지 확인(참고로 0부터 셉니다.);
		var index = $클릭된_녀석.index();
		
		// part-5 라는 클래스를 가진 나의 조상중에 나랑 가장 가까운 1개를 포장해주세요.
		
		// 기존의 active 된 요소들에서 active 제거
		$body.find('.active').removeClass('active');
		
		$body.find('div:nth-child(' + (index + 1) + ')').addClass('active');
	});
		</script>
</body>
</html>