<template lang="">
    <div class="intro">
        <div class="">
            <div class="content">
                <h4>Intro video</h4>
                <h2>Our Latest Insights & Overview.</h2>
                <button class="btn" @click="modalShow=!modalShow">
                    <i class="fas fa-play-circle"></i>
                </button>
            </div>
        </div>

        <div class="modal" v-if="modalShow" @click="modalShow=!modalShow">
            <button class="btn">
                <i class="far fa-window-close"></i>
            </button>
            <iframe width="560" height="315" src="https://www.youtube.com/embed/p_5_690u5sY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
    </div>
</template>
<script>
export default {
    data() {
        return {
            modalShow:false
        }
    },
}
</script>
<style scoped>
    .intro{
        background-image: url('../assets/video-intro.jpg');
        background-size: cover;
        height: 600px;
    }

    .intro>div{
        width: 100%;
        height: 100%;
        background-color: rgba(255, 255, 255, 0.664);
        display: flex;
        text-align: center;
        justify-content: center;
        align-items: center;
    }

    .intro .content{
        width: 600px;
    }

    .intro .modal{
        position: fixed;
        top: 0;
        left: 0;
        width: 90%;
        height: 90%;
        background-color: var(--light-gray);
        transform: translateX(5%) translateY(5%);
    }

    iframe{
        width: 80%;
        height: 80%;
    }
    
    .modal button{
        position: absolute;
        top: 10px;
        right: 10px;
    }

    @media only screen and (max-width:1000px){
        iframe{
            height: 60%;
        }
    }

    @media only screen and (max-width:750px){
        iframe{
            height: 40%;
        }
    }
</style>