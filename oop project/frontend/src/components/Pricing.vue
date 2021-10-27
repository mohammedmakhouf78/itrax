<template lang="">
    <div class="pricing site-pad">
        <h4>Our pricing plans</h4>
        <h2>Flexible Pricing Plans</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Totam et corrupti dolorem architecto repudiandae officiis mollitia odio beatae laborum quos.</p>

        <div class="cards">
            <Card />
            <Card />
            <Card />
        </div>
    </div>
</template>
<script>
import Card from './PricingCard.vue'
export default {
    components:{
        Card:Card
    }
}
</script>
<style scoped>
    .pricing{
        background-image: url('../assets/img-bg-010.png');
        background-size: 100%;
        background-position: top left;
        background-repeat: no-repeat;
        text-align: center;
    }
    
    .cards{
        display: flex;
        flex-wrap: wrap;
    }

    p{
        width: 700px;
        margin: 0 auto;
        margin-bottom: 1em;
    }

    @media only screen and (max-width:870px){
        p{
            width: 100%;
        }
    }
</style>