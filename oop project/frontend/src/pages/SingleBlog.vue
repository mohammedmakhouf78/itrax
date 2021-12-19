<template lang="">
    <div>
        <div class="image">
            <img :src="'../assets/blogs/'+post.image" alt="">
        </div>
        <h1>{{post.title}}</h1>
        <p>{{post.description}}</p>
    </div>
</template>
<script>
export default {
    data() {
        return {
            id:this.$route.params.id,
            post:[]
        }
    },
    computed:{
        path:function(){
            return require(`../assets/blogs/${this.post.image}`)
        },
    },
    created() {
        let formData = new FormData();
            formData.append('id',this.id)
            this.$axios.post('getSingleBlog.php',
            formData)
            .then(res => {
               if(res.data.success){
                   this.post = res.data.data
                   console.log(this.post.image)
                   console.log(this.path)
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
<style lang="">
    
</style>