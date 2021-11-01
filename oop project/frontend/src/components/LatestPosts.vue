<template lang="">
    <div class="latest site-pad">
        <h2>Latest posts</h2>
        <div class="cards">
            <Card v-for="(item, index) in posts" :key="index" :post="item" />
        </div>
        <div class="other">
            <router-link :to="{name:'blogs'}">
                    Older Posts
                <button class="btn">
                    <i class="fas fa-chevron-right"></i>
                </button>
            </router-link>
        </div>
    </div>
</template>
<script>
import Card from './PostCard.vue'
export default {
    components:{
        Card:Card,
    },
    data() {
        return {
            posts:[]
        }
    },
    created() {
        this.$axios.get('getLatestPosts.php')
            .then(res => {
               if(res.data.success){
                   this.posts = res.data.data
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
        justify-content: space-evenly;
    }

    h2{
        text-align: center;
    }

    .other{
        cursor: pointer;
        margin-top: 2em;
        text-align: center;
    }

    .other .btn{
        margin-left: 1em;
    }

    .other:hover{
        color: var(--light-blue);
    }
</style>