<template lang="">
    <div class="my-navbar">
         <b-navbar type="dark" variant="dark">
            <b-navbar-nav>
                <b-nav-item href="#">Home</b-nav-item>
                <b-nav-item href="#" @click="modalShow= true">Create A Blog</b-nav-item>
            </b-navbar-nav>
        </b-navbar>
        <CreateBlog :modalShow="modalShow" @hideModal="hideModal" />
    </div>
</template>
<script>
import CreateBlog from './CreateBlog.vue'
export default {
    components:{
        CreateBlog:CreateBlog
    },
    data() {
        return {
            modalShow: false
        }
    },
    methods: {
        hideModal:function(){
            this.modalShow = false
        },
    },
}
</script>
<style scoped>
    .my-navbar{
        margin-bottom: 3em;
    }
</style>