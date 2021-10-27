<template lang="">
    <div class="digital-market site-pad">
        <div class="top">
            <div class="col1">
                <img src="../assets/img-002.png" alt="">
            </div>
            <div class="col2">
                <h4>Digital Marketing</h4>
                <h2>we solve better digital marketing solution.</h2>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer eget est facilisis, cursus felis sed, faucibus eros. Pellentesque sit amet orci lorem. Phasellus dapibus nisl sed nulla porta blandit.
                </p>
                <button class="btn">Discover More</button>
            </div>
        </div>
        <div class="bottom">
            <div class="col1">
                <img src="../assets/img-003.png" alt="">
            </div>
            <div class="col2">
                <h4>Marketing Social</h4>
                <h2>social media allows big companies to act small.</h2>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer eget est facilisis, cursus felis sed, faucibus eros. Pellentesque sit amet orci lorem. Phasellus dapibus nisl sed nulla porta blandit.
                </p>
                <button class="btn">Discover More</button>
            </div>
        </div>
    </div>
</template>
<script>
export default {
    
}
</script>
<style scoped>
    .digital-market{
        background-image: url('../assets/img-bg-03.png');
        background-repeat: no-repeat;
        background-position: right;
        background-size: 100% 100% ;
    }

    .top,.bottom{
        display: flex;
    }

    .bottom{
        flex-direction: row-reverse;
        margin-top: 10em;
    }

    .col1,.col2{
        width: 50%;
    }

    .top .col1,.bottom .col2{
        margin-right: 1em;
    }

    @media only screen and (max-width:860px){
        .top,.bottom{
            flex-direction: column-reverse;
            text-align: center;
        }
        .col1,.col2{
            width: 100%;
            margin-top: 3em;
        }
    }
</style>