<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="../css/첫페이지.css">
    <script src="https://use.fontawesome.com/releases/v5.2.0/js/all.js"></script>
    <style>
    </style>
  </head>
  <body>
    <?php
      session_start();
    ?>
    <nav>
      <input type="checkbox" id="check">
      <label for="check" class="checkbtn">
        <i class="fas fa-bars"></i>
      </label>
      <ul style="text-align: right;">
      <li style="padding: 10px;"><?php 
          if(!isset($_SESSION['id'])){
            ?> <li><a href="./로그인/로그인.html" style="color: white; font-size: 25px;" >Login</li>
            <?php
          } else{
            $id = $_SESSION['id'];
            $name = $_SESSION['name'];
            ?>
            <li style = "font-size : 15px;"><a href = "./마이페이지/마이페이지.php" style = "color : white; font-size : 25px;">My Page</a>
            <a href = "./로그인/logout.php" style="color: white; font-size: 25px;">Logout</a> <br> 
            <span style = "color : white; margin : 30px;"><?php
            echo "<strong>$name</strong>($id)님 환영합니다."; } ?></span>
      </a></li>
      </ul>
      
    </nav>

    <div class ="logologo">
      <img src="../사진/logo.png"> 
      <p>인하대학교 동아리</p>

    </div>
    <ul class="left-ul">
      <li><a href="./카테고리/공연.php">공연</a></li>
      <li><a href="./카테고리/어학.php">어학</a></li>
      <li><a href="./카테고리/연구.php">연구</a></li>
      <li><a href="./카테고리/사회.php">사회</a></li>
      <li><a href="./카테고리/종교.php">종교</a></li>
    </ul>
    <ul class="right-ul">
      <li><a href="./카테고리/전시.php">전시</a></li>
      <li><a href="./카테고리/무예.php">무예</a></li>
      <li><a href="./카테고리/구기.php">구기</a></li>
      <li><a href="./카테고리/레저.php">레저</a></li>
      <li><a href="./카테고리/봉사.php">봉사</a></li>
    </ul>
     
    

    <div class="wrap">
      <div id="search">
        <form method="GET" action="검색처리.html" id="llll">
          
          <div id="tag-list">
          
          
            <input id="tag" type="text" class="searchTerm" placeholder="태그를 입력하고 스페이스바를 쳐주세요">
            <button type="submit" class="searchButton" onclick="setLocal()">
              <i class="fa fa-search"></i>
           </button>
  
        </div>

        </form>
        
        <!-- <input type="text" class="searchTerm" placeholder="관심있는 분야를 검색하세요.   (ex. 밴드, 코딩)"> -->
        
      </div>
  </div>



    <div id="container">
      <div id="box-1" class="box"><span style="border-bottom: black solid 1px; width: 100px;">이번주 인기 동아리 TOP5</span>
          <ul class="top">
          <li>1.동아리</li>
          <li>2.동아리</li>
          <li>3.동아리</li>
          <li>4.동아리</li>
          <li>5.동아리</li>
          </ul>
      </div>
      <div id="box-2" class="box">
        <div style="height: 300px;">
          넣을내용
        </div>
        <button class="styled" type="button">
                <i class="fas fa-arrow-right"></i>
        </button>
      </div>
      <div id="box-3" class="box"><span style="border-bottom: black solid 1px; width: 100px;">나의 스크랩</span>
      <div class="flex-container" style="display: flex; flex-wrap: wrap; justify-content: space-around; margin-top: 10px;">
        <img src="../사진/인하대사진.jpg"  style="width: 30%; margin: 5px;">
        <img src="../사진/인하대사진.jpg"  style="width: 30%; margin: 5px;">
        <img src="../사진/인하대사진.jpg"  style="width: 30%; margin: 5px;">
        <img src="../사진/인하대사진.jpg"  style="width: 30%; margin: 5px;">
        <img src="../사진/인하대사진.jpg"  style="width: 30%; margin: 5px;">
        <img src="../사진/인하대사진.jpg"  style="width: 30%; margin: 5px;">
        
        
      </div>
      
      </div>
    </div>
    <script src="../tag.js"></script>


  </body>
</html>