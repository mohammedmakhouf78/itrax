<template lang="">
    <div class="header bg-overlay site-pad">
        <div class="col1">
            <h4>Welcome to Farytheme</h4>
            <h2>Solution in digital Marketing and social networks</h2>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ab id illo sapiente illum incidunt, voluptatibus vel dolorem!</p>
            <button class="btn">Get Started</button>
            <button class="btn light-btn">Learn More</button>
        </div>
        <div class="col2">
            <img src="../assets/img-001.png" alt="">
        </div>
    </div>
</template>
<script>
export default {
    
}
</script>
<style scoped>
    .header{
        display: flex;
        align-items: center;
        height: 600px;
    }

    .col1{
        width: 40%;
    }

    .col2{
        width: 60%;
    }

    /* .col2 img{
        width: 100%;
    } */

    @media only screen and (max-width:1060px){
        .header{
            flex-direction: column-reverse;
            text-align: center;
            background-size: contain;
            background-position: top;
        }
        .col1,.col2{
            width: 100%;
        }

        

    }
</style>