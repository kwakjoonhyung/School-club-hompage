<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- 여기한번해보자 -->
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" href="../../css/vue.css">
    <link rel="stylesheet" href="../../css/header.css">

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
    <li><a href="어학.php">어학</a></li>
    <li><a href="연구.php">연구</a></li>
    <li><a href="사회.php">사회</a></li>
    <li><a href="종교.php">종교</a></li>
  </ul>
  <ul class="right-ul">
    <li><a href="전시.php">전시</a></li>
    <li><a href="무예.php">무예</a></li>
    <li><a href="구기.php">구기</a></li>
    <li><a href="레저.php">레저</a></li>
    <li><a href="봉사.php">봉사</a></li>
  </ul>
    
    <div id="app">
      <div class="title-container">
        <div>

        </div>
        <div class="filters">
			<span class="filter" v-bind:class="{ active: currentFilter === '전체' }" v-on:click="setFilter('전체')">전체</span>
        </div>
      </div>
    
      <transition-group class="projects" name="projects" >
        <div class="project" v-if="currentFilter === project.category || currentFilter === '전체'" v-bind:key="project.title" v-for="project in projects">
          <div class="project-image-wrapper">
            <img class="project-image" v-bind:src="project.image">
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
	  	  {title: "인하라이더", image: "../../사진/레저/인하라이더.jpg", category: '전체'},
        {title: "이카루스", image: "../../사진/레저/이카루스.jpg", category: '전체'},
        {title: "탈라리아", image: "../../사진/레저/탈라리아.jpg", category: '전체'},
        {title: "SKIN-SCUBA", image: "../../사진/레저/SKIN-SCUBA.jpg", category: '전체'},
        {title: "인하대 조정부", image: "../../사진/레저/조정부.jpg", category: '전체'},
        {title: "인하스키부", image: "../../사진/레저/인하스키부.jpg", category: '전체'},
        {title: "산악부", image: "../../사진/레저/산악부.jpg", category: '전체'},
        {title: "수영부", image: "../../사진/레저/수영.jpg", category: '전체'},
        {title: "스노우보드동아리", image: "../../사진/레저/스노우보드.jpg", category: '전체'},
      ]
   },
   methods: {
      setFilter: function(filter) {
         this.currentFilter = filter;
      }
   }
})
    </script>
    
  </body>
</html>