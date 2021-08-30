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
      <label class="logo">INHA</label>
      <ul style = "text-aling: right;">
        <li><a href="첫페이지.php">Home</li>
        <li><a href="#">About</li>
        <li><a href="#">Services</li>
        <li><a href="#">Contact</li>
        <?php 
          if(!isset($_SESSION['id'])){
            ?> <li style="padding: 15px;"><a href="#" style="color: white; font-size: 25px;"><a href="로그인.html">Login</li>
            <?php
          } else{
            ?><li><a href = "./로그아웃.php">로그아웃</li> <?php
          }
        ?>
      </ul>
      
    </nav>

    <div class ="logologo">
      <img src="../사진/logo.png"> 
      <p>인하대학교 동아리</p>

    </div>
    <ul class="left-ul">
      <li><a href="#">공연</a></li>
      <li><a href="#">어학</a></li>
      <li><a href="#">연구</a></li>
      <li><a href="#">사회</a></li>
      <li><a href="#">종교</a></li>
    </ul>
    <ul class="right-ul">
      <li><a href="#">전시</a></li>
      <li><a href="#">무예</a></li>
      <li><a href="#">구기</a></li>
      <li><a href="#">레저</a></li>
      <li><a href="#">봉사</a></li>
    </ul>
     
    

    <div class="wrap">
      <div class="search">
        <input type="text" class="searchTerm" placeholder="관심있는 분야를 검색하세요.   (ex. 밴드, 코딩)">
        <button type="submit" class="searchButton">
          <i class="fa fa-search"></i>
       </button>
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
<<<<<<< HEAD:category/html/첫페이지.php
      <div id="box-2" class="box">마감기한이 얼마 남지 않은 동아리를 확인하러 가보세요<br></br><br>
        <button class="styled" type="button"  onclick = "location.href=''">
                <i class="fas fa-arrow-right"></i>
        </button>
      </div>
      <div id="box-3" class="box">My calender</div>
    </div>
    <div class="wrap">
      <div class="search">
        <input type="text" class="searchTerm" placeholder="관심있는 분야를 검색하세요.">
        <button type="submit" class="searchButton">
          <i class="fa fa-search"></i> 
       </button>
=======
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
        
        
>>>>>>> front-end:category/html/첫페이지.html
      </div>
      
      </div>
    </div>


  </body>
</html>