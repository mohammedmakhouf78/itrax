<template lang="">
    <div class="card">
        <div class="content">
            <img :src="require('../assets/' + card.img)" alt="">
            <p class="desc">{{card.desc}}</p>
            <h3>{{card.name}}</h3>
            <p>{{card.job}}</p>
            <div class="social-links">
                <SocialLinks />
            </div>
        </div>
    </div>
</template>
<script>
import SocialLinks from './SocialLinks.vue';
export default {
    components:{
        SocialLinks:SocialLinks
    },
    props:["card"],
    data() {
        return {
        }
    },
}
</script>
<style scoped>
    .card{
        padding: 1em;
        width: 30%;
        max-width: 33%;
    }

    .card .content{
        padding: 2em 1.7em;
    }

    .desc{
        margin-top: 30px;
    }

    @media only screen and (max-width:1030px){
        .card{
            width: 45%;
            max-width: 45%;
        }
    }
    @media only screen and (max-width:750px){
        .card{
            width: 100%;
            max-width: 100%;
        }
    }
    
  
</style>