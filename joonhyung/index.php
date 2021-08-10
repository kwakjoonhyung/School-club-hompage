<?php
session_start();
?>
<!DOCTYPE html>
<head>
	<meta charset="utf-8" />
	<title>회원가입 및 로그인 사이트</title>
<link rel="stylesheet" type="text/css" href="/css/common.css" />
</head>
<body>
	<ul class="nav justify-content-end">
			<?php
			if (isset($_SESSION['userId'])) {
					echo "{$_SESSION['userId']}님 환영합니다  ";
			?>
					<li class="nav-item d-flex align-items-center" onclick="logout()">로그아웃</li>
			<?php
			} else {
			?>
			<div id="login_box">
				<h1>로그인</h1>
					<form method="POST" action="./loginProcess.php">
						<table align="center" border="0" cellspacing="0" width="300">
		        			<tr>
		            			<td width="130" colspan="1">
		                		<input name="id" type="text" class="form-control" id="exampleFormControlInput1" placeholder="id">
		            			</td>
		            		<td rowspan="2" align="center" width="100" >
		                		<button type="submit" id="btn" >로그인</button>
		            		</td>
		        		</tr>
		        		<tr>
		            		<td width="130" colspan="1">
		               		<input name="password" type="password" class="form-control" id="exampleFormControlInput1" placeholder="password">
		            		</td>
		        		</tr>
		        		<tr>
		           		<td colspan="3" align="center" class="mem">
		              	<a href="./signup.php">회원가입 하시겠습니까?</a>
		           		</td>
		        		</tr>
		    		</table>
		  		</form>
				</div>
		<?php
		}
		?>
  </ul>
	<script>
			function logout() {
					console.log("hello");
					const data = confirm("로그아웃 하시겠습니까?");
					if (data) {
							location.href = "./logoutProcess.php";
					}

			}
	</script>
</body>
</html>
