<template>
  <div id="app">
    <NavBar @blogAdded="blogAdded"/>
     <div class="blogs">
       <Blog v-for="(blog,index) in blogs" :key="index" :blog="blog" />
     </div>
  </div>
</template>

<script>
import Blog from './components/Blog.vue'
import NavBar from './components/NavBar.vue'
import axios from 'axios';
export default {
  components:{
    Blog:Blog,
    NavBar:NavBar
  },
  name: 'App',
  data() {
    return {
      blogs:[],
    }
  },
  methods: {
    blogAdded:function(blog){
      this.blogs.push(blog)
    }
  },
  async created() {
    axios.post('http://localhost:8088/itrax/session9/task/backend/controllers/getBlogs.php')
    .then(res => {
      res.data.forEach(element => {
        this.blogs.push(element)
      });

    })
    .catch(err => {
      console.log(err)
    })



    // axios.get('../backend/controllers/getBlogs.php')
    // .then(res => {
    //   console.log(res)
    // })
    // .catch(err => {
    //   console.log(err)
    // })
  },
}
</script>

<style>
  body{
    background-color:#816C61 !important;
  }
  .blogs{
    display: flex;
    flex-wrap: wrap;
    justify-content: space-evenly;
  }
</style>
