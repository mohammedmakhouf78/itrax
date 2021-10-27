<template lang="">
    <div class="service site-pad bg-overlay">
        <div class="head">
            <div class="col1">
                <h4>Service</h4>
                <h2>Reinventing new business ideas and markets via web.</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam unde est placeat iusto nostrum quo nemo? Aspernatur.</p>
            </div>
            <div class="col2">
                <button class="btn">Learn More</button>
                <button class="btn light-btn">Learn More</button>
            </div>
        </div>
        <div class="services">
            <div class="card">
                <div class="content">
                    <img src="../assets/service1.png" alt="">
                    <h3>Social Marketing</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
                </div>
            </div>
            <div class="card">
                <div class="content">
                    <img src="../assets/service2.png" alt="">
                    <h3>Product Marketing</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
                </div>
            </div>
            <div class="card">
                <div class="content">
                    <img src="../assets/service3.png" alt="">
                    <h3>SEO Optimization</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
                </div>
            </div>
            <div class="card">
                <div class="content">
                    <img src="../assets/service3.png" alt="">
                    <h3>Reputation Managment</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
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
    .service{
        background-image: url('../assets/img-bg-02.png');
        background-position: top left;
        background-size: 80% 100%;
    }

    .head{
        display: flex;
        align-items: center;
    }

    .head .col1{
        width: 50%;
    }

    .services{
        margin-top: 3em;
        display: flex;
    }

    .services .card{
        width: 25%;
        max-width: 25%;
        padding: 0em 1em;
    }

    @media only screen and (max-width:900px){
        .service{
            background-size: contain;
        }
        .head{
            flex-direction: column-reverse;
            text-align: center;
        }
        .head .col1{
            width: 100%;
            margin-top: 2em;
        }
    }


    @media only screen and (max-width:1000px){
        .services{
            flex-wrap: wrap;
        }

        .services .card{
            width: 45%;
            max-width: 50%;
            margin-bottom: 2em;
        }
    }

    @media only screen and (max-width:736px){
        .services{
            justify-content: center;
        }
        .services .card{
            width: 100%;
            max-width: 100%;
        }
    }

</style>