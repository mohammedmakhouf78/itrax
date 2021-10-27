<template lang="">
    <div class="latest site-pad">
        <h2>Latest posts</h2>
        <div class="cards">
            <Card />
            <Card />
            <Card />
        </div>
        <div class="other">
            Older Posts
            <button class="btn">
                <i class="fas fa-chevron-right"></i>
            </button>
        </div>
    </div>
</template>
<script>
import Card from './PostCard.vue'
export default {
    components:{
        Card:Card
    }
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