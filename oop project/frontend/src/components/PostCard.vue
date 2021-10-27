<template lang="">
    <div class="card">
        <div class="image">
            <img :src="path" alt="">
        </div>
        <div class="body">
           <div class="header">
                <div class="date">
                    <i class="far fa-calendar-alt"></i>
                    September 05,2020
                </div>
                <div class="date">
                    <i class="far fa-calendar-alt"></i>
                    {{post.published_at}}
                </div>
           </div>
            <h3>{{post.title}}</h3>
            <p>
                {{post.description}}
            </p>
            <button class="btn">Read More <i class="fas fa-chevron-right"></i></button>
        </div>
    </div>
</template>
<script>
export default {
    props:['post'],
    computed:{
        path:function(){
            return require(`../assets/blogs/${this.post.image}`)
        }
    },
}
</script>
<style scoped>
    .card{
        width: 30%;
        max-width: 30%;
        border-radius: 9px;
        border: 1px solid #eaecec;
        box-shadow: 0px 9px 25px 0px #dadee0;
        transition: all 0.25s ease-in-out;
        padding: 0em;
    }

    .card:hover{
        transform: translateY(-1%);
    }

    .body{
        padding: 2em 1em;
    }

    .header{
        display: flex;
        justify-content: space-between;
    }

    .date{
        font-size: 12px;
        color: var(--light-gray);
    }

    .date .far{
        color: var(--light-blue);
        margin-right: 0.5em;
    }

    img{
        width: 100%;
    }

    h3{
        font-weight: bold;
        font-size: 25px;
        color: var(--dark-blue);
        margin: 60px 0px 30px 0px;
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