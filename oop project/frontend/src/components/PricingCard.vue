<template lang="">
    <div class="card">
        <div class="content">
            <h4>Basic Plan</h4>
            <h2>$89.50</h2>
            <p>Monthly Package</p>
            <button class="btn">Start free trial</button>
            <div>
                <p>
                    <i class="fas fa-check"></i>
                    Social Media Marketing
                </p>
                <p>
                    <i class="fas fa-check"></i>
                    2.100 Keywords
                </p>
                <p>
                    <i class="fas fa-check"></i>
                    One Way Link Building
                </p>
                <p>
                    <i class="fas fa-check"></i>
                    5 Free Optimization
                </p>
                <p>
                    <i class="fas fa-check"></i>
                    3 Press Releases
                </p>
            </div>
        </div>
    </div>
</template>
<script>
export default {
    
}
</script>
<style scoped>
    .card{
        width: 30%;
        max-width: 30%;
    }

    .content{
        height: 600px;
        justify-content: space-evenly;
        padding: 5em 0em;
    }

    @media only screen and (max-width:1070px){
        .card{
            width: 45%;
            max-width: 45%;
            margin-bottom: 2em;
        }
    }

    @media only screen and (max-width:770px){
        .card{
            width: 90%;
            max-width: 95%;
        }
    }
</style>