<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <title>마이페이지</title>
    <link rel="stylesheet" href="../../css/마이페이지.css">
    <script src="jquery-3.4.1.js"></script>
</head>
<body>
<div id="modify_container">
	<h1>회원정보 수정 화면</h1>
    <form class="modify_form" action="modifyAction.jsp" method="post" name="reg_frm">
    	<table class="modify_table">
    	<tr>
    		<td class="text">아이디</td>
    		<td><input type = "text" name= "id" value = "<%= dto.getUserId() %>"></td>
    	</tr>
    	<tr>
    		<td class="text">비밀번호</td>
    		<td><input type="text" name="pw" value="<%= dto.getUserPassword() %>"></td>
    	</tr>
    	<tr>
    		<td class="text">비밀번호 확인</td>
    		<td><input type="text" name="pw_check" value="<%= dto.getUserPassword() %>"></td>
    	</tr>
    	<tr>
    		<td class="text">이름</td>
    		<td><input type="text"name="userName" value="<%= dto.getUserName() %>"></td>
    	</tr>
    	<tr>
    		<td class="text">성별</td>
    		<td>
    		<%
    			if(dto.getUserGender() == "남자") { 
    		%>
        //성별이 남자인경우
    		<input type="radio" name="userGender" autocomplete="off" value="남자" checked>남자
    		<input type="radio" name="userGender" autocomplete="off" value="여자">여자
    		<%		
    			} else {
    		%>
        //성별이 여자인경우
    		<input type="radio" name="userGender" autocomplete="off" value="남자">남자
    		<input type="radio" name="userGender" autocomplete="off" value="여자" checked>여자
    		<%
    			}
    		%>
    		</td>
    	</tr>    	    	
    	<tr>
    		<td class="text">이메일</td>
    		<td><input type="email" name="userEmail" value="<%= dto.getUserEmail() %>"></td>
    	</tr>      	    	
    	</table>
    	<input type="submit" value="수정" class="btn" onclick="updateInfoConfirm();">
    	<input type="reset" value="취소" class="btn" onclick="javascript:window.location='main.jsp'">
    </form>
</div>    
</body>
</html>