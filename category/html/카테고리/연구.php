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
    
    <div id="app">
      <div class="title-container">
        <div>
          <h3 class="title">
            연구
          </h3>
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
        {title: "나래", image: "../../사진/연구/나래.jpg", category: '전체'},
        {title: "로보트연구회", image: "../../사진/연구/로보트연구회.jpg", category: '전체'},
        {title: "별지기", image: "../../사진/연구/별지기.jpg", category: '전체'},
        {title: "보동보동", image: "../../사진/연구/보동보동.jpg", category: '전체'},
        {title: "산하사랑", image: "../../사진/연구/산하사랑.jpg", category: '전체'},
        {title: "아이디어 뱅크", image: "../../사진/연구/아이디어 뱅크.jpg", category: '전체'},
        {title: "인하공방", image: "../../사진/연구/인하공방.jpg", category: '전체'},
        {title: "인컴", image: "../../사진/연구/인컴.jpg", category: '전체'},
        {title: "NETers", image: "../../사진/연구/NETers.jpg", category: '전체'},
        {title: "인하 기우회", image: "../../사진/연구/인하 기우회.jpg", category: '전체'},
        {title: "인하로케트연구회", image: "../../사진/연구/인하로케트연구회.jpg", category: '전체'},
        {title: "I.C.C", image: "../../사진/연구/I.C.C.jpg", category: '전체'},
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