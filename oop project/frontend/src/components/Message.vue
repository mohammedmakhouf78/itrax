<template lang="">
    <div class="message" :class="[cls , {active:showing,hide:!showing}]">
        <p>{{msg}}</p>
    </div>
</template>
<script>
export default {
    props:["msg","cls","showing"],
    data() {
        return {
        }
    },
    


}
</script>
<style scoped>
    .message{
        position: fixed;
        top: 10%;
        right: 0px;
        min-width: 300px;
        padding: 1em;
        transform: translateX(100%);
        transition: transform 1s ease-in-out;
        z-index: 1000;
    }

    .active{
        transform: translateX(0%);
        animation: msg 1.5s ;
    }

    @keyframes msg{
        from{
            transform: translateX(100%);
        }
        to{
            transform: translateX(0%);
        }
    }

    .hide{
        transform: translateX(100%);
        transition: all 1s ease;
    }

    .success{
        background-color: var(--success);
    }

    .danger{
        background-color: var(--danger);
    }

    p{
        color: white;
        font-size: 20px;
        margin: 0;
    }
</style>