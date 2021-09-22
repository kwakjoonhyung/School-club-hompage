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
            무예
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
	  	  {title: "검도부", image: "https://picsum.photos/g/200?image=122", category: '전체'},
        {title: "바크로바틱소울즈", image: "https://picsum.photos/g/200?image=122", category: '전체'},
        {title: "COMBATE", image: "https://picsum.photos/g/200?image=116", category: '전체'},
        {title: "인하대학교 태권도부", image: "https://picsum.photos/g/200?image=121", category: '전체'},
        {title: "인하암즈", image: "https://picsum.photos/g/200?image=121", category: '전체'},
        {title: "인하유도부", image: "https://picsum.photos/g/200?image=121", category: '전체'},
        {title: "IBF", image: "https://picsum.photos/g/200?image=133", category: '전체'},
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