<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" href="../../css/vue.css">
    <link rel="stylesheet" href="../../css/header.css">
    <title>TEST!!</title>
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

  <div class ="logologo" onclick="gomain()">
    <img src="../../사진/logo.png"> 
    <p>인하대학교 동아리</p>

  </div>
  <ul class="left-ul">
    <li><a href="공연.php">공연</a></li>
    <li><a href="./카테고리/어학.html">어학</a></li>
    <li><a href="./카테고리/연구.html">연구</a></li>
    <li><a href="./카테고리/사회.html">사회</a></li>
    <li><a href="./카테고리/종교.html">종교</a></li>
  </ul>
  <ul class="right-ul">
    <li><a href="./카테고리/전시.html">전시</a></li>
    <li><a href="./카테고리/무예.html">무예</a></li>
    <li><a href="./카테고리/구기.html">구기</a></li>
    <li><a href="./카테고리/레저.html">레저</a></li>
    <li><a href="./카테고리/봉사.html">봉사</a></li>
  </ul>
  
   
    
    <div id="app" style="margin-top:200px">
      <div class="title-container">
        <div>
        </div>
        <div class="filters" style="font-size:20px">
         <span class="filter" v-bind:class="{ active: currentFilter === '전체' }" v-on:click="setFilter('전체')">전체</span>
         <span class="filter" v-bind:class="{ active: currentFilter === '뮤지컬/연극' }" v-on:click="setFilter('뮤지컬/연극')">뮤지컬/연극</span>
         <span class="filter" v-bind:class="{ active: currentFilter === '힙합' }" v-on:click="setFilter('힙합')">힙합</span>
         <span class="filter" v-bind:class="{ active: currentFilter === '가요' }" v-on:click="setFilter('가요')">가요</span>
         <span class="filter" v-bind:class="{ active: currentFilter === '악기' }" v-on:click="setFilter('악기')">악기</span>
         <span class="filter" v-bind:class="{ active: currentFilter === '댄스' }" v-on:click="setFilter('댄스')">댄스</span>
         <span class="filter" v-bind:class="{ active: currentFilter === '마술' }" v-on:click="setFilter('마술')">마술</span>
         <span class="filter" v-bind:class="{ active: currentFilter === '풍물' }" v-on:click="setFilter('풍물')">풍물</span>
        </div>
      </div>
    
      <transition-group class="projects" name="projects" >
        <div class="project" v-if="currentFilter === project.category || currentFilter === '전체'" v-bind:key="project.title" v-for="project in projects">

          <div class="project-image-wrapper">
            <a v-bind:href = "project.url" >
            <img class="project-image" v-bind:src="project.image"></a>
            
            <div class="gradient-overlay"></div>
            <div class="circle">
              <span class="project-title">{{project.title}}</span>
            </div>
          </div>
        </div>
      </transition-group>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>

    <script>
      var app=new Vue({
   el: '#app',
   data: {
      currentFilter: '전체',
      projects: [
        {title: "극단,봄", image: "../../사진/공연/극단,봄.jpg", category: '뮤지컬/연극', url : "../세부동아리/공연/극단봄.html"},
        {title: "인하극예술연구회", image: "../../사진/공연/인하극예술연구회.jpg", category: '뮤지컬/연극', url : "../세부동아리/공연/인하극예술연구회.html"},
        {title: "개로", image: "../../사진/공연/개로.jpg", category: '힙합'},
        {title: "꼬망스", image: "../../사진/공연/꼬망스.jpg", category: '가요'},
        {title: "노래사랑", image: "../../사진/공연/노래사랑.jpg", category: '가요'},
        {title: "인하합창단", image: "../../사진/공연/인하합창단.jpg", category: '가요'},
        {title: "고전기타회", image: "../../사진/공연/고전기타회.jpg", category: '악기'},
        {title: "인하오케스트라", image: "../../사진/공연/인하오케스트라.jpg", category: '악기'},
        {title: "인하배소리", image: "../../사진/공연/인하배소리.jpg", category: '악기'},
        {title: "인하인의 피아노 사랑", image: "../../사진/공연/인하인의 피아노 사랑.jpg", category: '악기'},
        {title: "FLAGON", image: "../../사진/공연/FLAGON.jpg", category: '악기'},
        {title: "INDKY", image: "../../사진/공연/INDKY.jpg", category: '악기'},
        {title: "POP MUSIC", image: "../../사진/공연/POP MUSIC.jpg", category: '악기'},
        {title: "트리키", image: "../../사진/공연/트리키.jpg", category: '댄스'},
        {title: "F.L.EX.", image: "../../사진/공연/F.L.EX..jpg", category: '댄스'},
        {title: "판타스틱스테이션", image: "../../사진/공연/판타스틱스테이션.jpg", category: '마술'},
        {title: "풍물사랑", image: "../../사진/공연/풍물사랑.jpg", category: '풍물'},
      ]
   },
   methods: {
      setFilter: function(filter) {
         this.currentFilter = filter;
      }
   }
})
function gomain(){
  location.href="../첫페이지.php";
}
    </script>
    
  </body>
</html>