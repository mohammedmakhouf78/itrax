<template lang="">
    <div class="consult site-pad">
        <div class="col1">
            <img src="../assets/img-004.png" alt="">
        </div>
        <div class="col2">
            <h4>Consulting</h4>
            <h2>The best in social digital marketing consulting services.</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer eget est facilisis, cursus felis sed, faucibus eros. Pellentesque sit amet orci lorem. Phasellus dapibus nisl sed nulla porta blandit.</p>
            <button class="btn">Discover More</button>
        </div>
    </div>
</template>
<script>
export default {
    
}
</script>
<style scoped>
    .consult{
        display: flex;
        background-color: #EBFCFF;
    }
    .col1,.col2{
        width: 50%;
    }
    .col1{
        margin-right: 1em;
    }

    @media only screen and (max-width:860px){
        .consult{
            flex-direction: column-reverse;
            text-align: center;
        }
        .col1,.col2{
            width: 100%;
            margin-top: 3em;
        }
    }
</style>