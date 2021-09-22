<!DOCTYPE html>
<html lang="en">
  <head>
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
      <span class="filter" v-bind:class="{ active: currentFilter === '아동봉사' }" v-on:click="setFilter('아동봉사')">아동봉사</span>
      <span class="filter" v-bind:class="{ active: currentFilter === '유기봉사' }" v-on:click="setFilter('유기봉사')">유기봉사</span>
      <span class="filter" v-bind:class="{ active: currentFilter === '복지관' }" v-on:click="setFilter('복지관')">복지관</span>
      <span class="filter" v-bind:class="{ active: currentFilter === '집수리' }" v-on:click="setFilter('집수리')">집수리</span>
      <span class="filter" v-bind:class="{ active: currentFilter === '기타' }" v-on:click="setFilter('기타')">기타</span>         
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
	  	  {title: "개구장이", image: "../../사진/봉사/개구장이.jpg", category: '아동봉사'},
        {title: "파파", image: "../../사진/봉사/파파.jpg", category: '아동봉사'},
        {title: "MRA", image: "../../사진/봉사/MRA.jpg", category: '아동봉사'},
        {title: "인하브로드", image: "../../사진/봉사/인하브로드.jpg", category: '아동봉사'},
        {title: "하룡회", image: "../../사진/봉사/하룡회.jpg", category: '아동봉사'},
        {title: "사랑해줄개", image: "../../사진/봉사/사랑해줄개.jpg", category: '유기봉사'},
        {title: "심성회", image: "../../사진/봉사/심성회.jpg", category: '복지관'},
        {title: "아해누리", image: "../../사진/봉사/아해누리.jpg", category: '복지관'},
        {title: "트인", image: "../../사진/봉사/트인.jpg", category: '집수리'},
        {title: "로타랙트", image: "../../사진/봉사/로타랙트.jpg", category: '기타'},
        {title: "용마루", image: "../../사진/봉사/용마루.jpg", category: '기타'},
        {title: "대우회/JOA", image: "../../사진/봉사/대우회.jpg", category: '기타'},
        {title: "RCY", image: "../../사진/봉사/RCY.jpg", category: '기타'},
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