<template lang="">
    <div class="blogs site-pad">
        <div class="btn-con" v-if="loggedIn">
            <button class="btn" @click="modalShow=!modalShow">Make a Blog</button>
        </div>
        <!-- <div class="cards"> -->
            <transition-group 
            tag="div" 
            class="cards" 
            @before-enter="beforeEnter"
            @enter="enter"
            >
            <Card 
            v-for="(item, index) in posts" 
            :key="index" 
            :post="item" 
            @updateBlog="updateBlog" 
            @deleteBlog="deleteBlog"
            :data-index="index" 
            />
            </transition-group>
        <!-- </div> -->
        <div class="create-modal" v-if="modalShow">
            <div class="bg">
                <button class="btn close" @click="modalShow=!modalShow">X</button>
                <form @submit="submit" method="POST">
                    <div class="form-control">
                        <label for="title">
                            <i class="fas fa-user"></i>
                        </label>
                        <input v-model="post.title" type="text" id="title" placeholder="Post Title">
                    </div>
                    <div class="form-control">
                        <label for="description">
                            <i class="fas fa-user"></i>
                        </label>
                        <input v-model="post.description" type="text" id="description" placeholder="Post Description">
                    </div>
                    <div class="form-control">
                        <label for="description">
                            <i class="fas fa-user"></i>
                        </label>
                        <select v-model="post.category_id">
                            <option v-for="(category, index) in categories" :key="index" :value="category.id">{{category.category}}</option>
                        </select>
                    </div>
                    <div class="form-control">
                        <input type="file" @change="handleFileUpload($event)">
                    </div>
                    <button class="btn">Post</button>
                </form>
            </div>
        </div>
        <Message :msg="message.msg" :cls="message.cls" :showing="message.showMsg" />
    </div>
</template>
<script>
import Card from '../components/PostCard.vue'
import gsap from 'gsap'
export default {
    components:{
        Card:Card,
    },
    data() {
        return {
            modalShow:false,
            post:{
                file:"",
                title:"",
                description:"",
                category_id:""
            },
            posts:[],
            categories:[]
        }
    },
    computed:{
        authEmail:function(){
            return this.$store.state.email
        },
    },
    methods: {
        submit:function(e){
            e.preventDefault();
            if(this.post.title == ""){
                this.message.msg = "Please enter the post title"
                this.error()
                return
            }else if(this.post.description == ""){
                this.message.msg = "Please enter the post description"
                this.error()
                return
            }else if(this.post.file == ""){
                this.message.msg = "Please select the image"
                this.error()
                return
            }

            let formData = new FormData();
            formData.append('file',this.post.file)
            formData.append('email',this.authEmail)
            formData.append('description',this.post.description)
            formData.append('title',this.post.title)
            formData.append('category_id',this.post.category_id)

            this.$axios.post('CreatePost.php',
            formData,
            {
                header:{
                    'Content-Type' : 'multipart/form-data'
                }
            })
            .then(res => {
               if(res.data.success){
                   this.message.msg = "Your post was successfully published"
                   this.success();
                   this.modalShow = false
                   this.posts.unshift(res.data.data)
                   console.log(res.data.data)
               }else{
                   this.message.msg = "Sorry Try again"
                   this.error();
                   console.log(res)
               }
            })
            .catch((err) => {
                this.message.msg = "There was an error"
                this.error();
                console.log(err)
            })

            
        },
        handleFileUpload:function(e){
            this.post.file = e.target.files[0];
        },
        updateBlog:function(data){
            this.posts = this.posts.map((element) => {
                if(data.id == element.id){
                    element = data
                }
                return element
            })
        },
        deleteBlog:function(id){
            this.posts = this.posts.filter((element)=> element.id != id)
        },
        beforeEnter:function(el){
            el.style.opacity = 0
            el.style.transform = "translateY(200px)"
        },
        enter:function(el){
            gsap.to(el,{
                y:0,
                opacity:1,
                duration:0.2,
                delay: el.dataset.index * 0.2,
                ease: "expo.out"
            })
        },
    },


    created() {
        this.$axios.get('GetPosts.php')
            .then(res => {
               if(res.data.success){
                   this.posts = res.data.data
                //    console.log(this.posts)
               }else{
                   console.log(res)
               }
            })
            .catch((err) => {
                console.log(err)
            })

        this.$axios.get('getCategories.php')
            .then(res => {
               if(res.data.success){
                   this.categories = res.data.data
                //    console.log(this.posts)
               }else{
                   console.log(res)
               }
            })
            .catch((err) => {
                console.log(err)
            })
    },

}
</script>
<style scoped>
    .cards{
        display: flex;
        flex-wrap: wrap;
        justify-content: space-around;
    }

    .card{
        margin-bottom: 2em;
    }

    .btn-con{
        margin-bottom: 2em;
        text-align: right;
    }

    .btn-con .btn{
        background-color: var(--primary);
    }
    
</style>