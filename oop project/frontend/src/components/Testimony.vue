<template lang="">
    <div class="testimony site-pad">
        <div class="top">
            <div class="col1">
                <h4>Real Testimonials</h4>
                <h2>This is what our esteemed clients have to say</h2>
            </div>
            <div class="col2">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer eget est facilisis, cursus felis sed, faucibus eros.</p>
            </div>
        </div>
        <div class="bot">
            <Card v-for="(card, index) in cards" :key="index" :card="card"/>
        </div>
    </div>
</template>
<script>
import Card from './TestimonyCard.vue'
export default {
    components:{
        Card:Card
    },
    data() {
        return {
            cards:[
                {
                    img: "Amazon.png",
                    desc:"Create your modern web blog with ease using Farytheme.",
                    name:"Jogn Doe",
                    job:"Web Developer"
                },
                {
                    img: "Airbnb.png",
                    desc:"Create your modern web blog with ease using Farytheme.",
                    name:"Jogn Doe",
                    job:"Web Developer"
                },
                {
                    img: "Tidal.png",
                    desc:"Create your modern web blog with ease using Farytheme.",
                    name:"Jogn Doe",
                    job:"Web Developer"
                },
                {
                    img: "PayPal.png",
                    desc:"Create your modern web blog with ease using Farytheme.",
                    name:"Jogn Doe",
                    job:"Web Developer"
                },
                {
                    img: "slack.png",
                    desc:"Create your modern web blog with ease using Farytheme.",
                    name:"Jogn Doe",
                    job:"Web Developer"
                },
                {
                    img: "Spotify.png",
                    desc:"Create your modern web blog with ease using Farytheme.",
                    name:"Jogn Doe",
                    job:"Web Developer"
                },
            ]
        }
    },
}
</script>
<style scoped>
    .top{
        display: flex;
        align-items: center;
    }

    .top .col1,.top .col2{
        width: 50%;
    }

    .bot{
        display: flex;
        flex-wrap: wrap;
    }

    @media only screen and (max-width:1030px){
        .top{
            flex-direction: column-reverse;
            flex-wrap: wrap;
            text-align: center;
        }
        .top .col1,.top .col2{
            width: 100%;
            margin-bottom: 2em;
        }
    }
</style>