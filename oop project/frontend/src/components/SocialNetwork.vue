<template lang="">
    <div class="social-network site-pad">
        <div class="head">
            <div class="line"></div>
            <h4>Social Networking</h4>
            <h2>Social Media Is The Buzzword Among Start-Up Firms.</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus sit ab officia aliquam voluptatum corrupti perspiciatis optio assumenda consectetur totam?</p>
            <img src="../assets/img-005.png" alt="">
        </div>
        <div class="foot">
            <div class="cards">
                <div class="card">
                    <h6>1,165</h6>
                    <h5>Project Excuted</h5>
                </div>
                <div class="card">
                    <h6>286+</h6>
                    <h5>Global Presence</h5>
                </div>
                <div class="card">
                    <h6>2,568</h6>
                    <h5>Happy Clients</h5>
                </div>
                <div class="card">
                    <h6>185+</h6>
                    <h5>Recognitions</h5>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
export default {
    
}
</script>
<style scoped>

    .head{
        width: 800px;
        margin: 0 auto;
        text-align: center;
    }

    .line{
        width: 2px;
        height: 200px;
        background-color: #FF7626;
        margin: 2em auto;
    }

    .foot{
        padding-top: 8em;
        padding-bottom: 8em;
    }

    .foot .cards{
        display: flex;
        justify-content: space-evenly;
        text-align: center;
    }
    .foot .cards .card{
        width: 16%;
        padding: 3.5em 2em;
        background-color: var(--light-blue);
        border-radius: 9px;
        box-shadow: 0px 9px 25px 0px #c3ebff;
        color: white;
        transition: all 0.25s ease;
    }
    .card h6{
        font-weight: bold;
        font-size: 45px;
        line-height: 1.3;
        margin-bottom: 20px;
    }
    .card h5{
        font-size: 18px;
        line-height: 2;
    }

    .foot .cards .card:hover{
        transform: translateY(-3%);
    }

    @media only screen and (max-width:890px){
        .head{
            width: 90%;
        }
    }

    @media only screen and (max-width:950px){
        .foot .cards{
            flex-wrap: wrap;
        }
        .foot .cards .card{
            width: 35%;
            margin-bottom: 2em;
        }
    }

    @media only screen and (max-width:640px){
        .foot .cards .card{
            width: 70%;
        }
    }
</style>