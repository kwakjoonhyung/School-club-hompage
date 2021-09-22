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
            종교
          </h3>
        </div>
        <div class="filters">
			<span class="filter" v-bind:class="{ active: currentFilter === '전체' }" v-on:click="setFilter('전체')">전체</span>
      <span class="filter" v-bind:class="{ active: currentFilter === '기독교' }" v-on:click="setFilter('기독교')">기독교</span>
      <span class="filter" v-bind:class="{ active: currentFilter === '불교' }" v-on:click="setFilter('불교')">불교</span>
      <span class="filter" v-bind:class="{ active: currentFilter === '가톨릭' }" v-on:click="setFilter('가톨릭')">가톨릭</span>
      <span class="filter" v-bind:class="{ active: currentFilter === '신앙운동' }" v-on:click="setFilter('신앙운동')">신앙운동</span>
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
	      {title: "네이게이토", image: "https://picsum.photos/g/200?image=122", category: '기독교'},
        {title: "민족기독학생회", image: "https://picsum.photos/g/200?image=122", category: '기독교'},
        {title: "CAM", image: "https://picsum.photos/g/200?image=116", category: '기독교'},
        {title: "CCC", image: "https://picsum.photos/g/200?image=121", category: '기독교'},
        {title: "C.F.M", image: "https://picsum.photos/g/200?image=121", category: '기독교'},
        {title: "ESF", image: "https://picsum.photos/g/200?image=121", category: '기독교'},
        {title: "IVF", image: "https://picsum.photos/g/200?image=133", category: '기독교'},
        {title: "JDM", image: "https://picsum.photos/g/200?image=133", category: '기독교'},
        {title: "JOY 선교회", image: "https://picsum.photos/g/200?image=133", category: '기독교'},
        {title: "불교학생회", image: "https://picsum.photos/g/200?image=133", category: '불교'},
        {title: "인하가톨릭학생회", image: "https://picsum.photos/g/200?image=133", category: '가톨릭'},
        {title: "SFC", image: "https://picsum.photos/g/200?image=133", category: '신앙운동'},
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