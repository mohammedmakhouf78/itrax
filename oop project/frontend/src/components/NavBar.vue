<template lang="">
    <div class="nav site-pad">
        <div class="top-nav">
            <div class="links">
                <p>Help</p>
                <p>Contacts</p>
            </div>
            <SocialLinks />
        </div>
        <div class="bot-nav">
            <div class="logo">
                <img src="../assets/logo-faryfinit.png" alt="">
            </div>
            <ul :class="{navActive:navActive}">
                <li @click="navActive = !navActive" class="mobile-close">X</li>
                <li>
                    <router-link :to="{name:'home'}">Home</router-link>
                </li>
                <li>
                    <router-link :to="{name:'blogs'}">Blogs</router-link>
                </li>
                <li v-if="!loggedIn">
                    <router-link :to="{name:'register'}">Register</router-link>
                </li>
                <li v-if="!loggedIn">
                    <router-link :to="{name:'login'}">Login</router-link>
                </li>
                <li v-if="loggedIn">
                    <a href="http://localhost:8088/itrax/oop%20project/backend/dashboard/pages/home.php" target="_blank">
                        DashBoard
                    </a>
                </li>
                <li v-if="loggedIn" @click="logout">Logout</li>
                <li><icon :icon ="['fas','search']"></icon></li>
                <li>
                    <button class="btn">Buy Now</button>
                </li>
            </ul>
            <div class="burger" @click="navActive = !navActive">
                <div class="line"></div>
                <div class="line"></div>
                <div class="line"></div>
            </div>
        </div>
    </div>
</template>
<script>
import SocialLinks from './SocialLinks.vue';
export default {
    components:{
        SocialLinks:SocialLinks
    },

    data() {
        return {
            navActive:false
        }
    },
    methods: {
        logout:function(){
            this.$store.dispatch('logout')
        }
    }
}
</script>
<style scoped>
    .nav{
        padding-top: 1em;
        padding-bottom: 1em;
    }

    .top-nav,.top-nav .links,.bot-nav,.bot-nav ul{
        display: flex;
        align-items: center;
        justify-content: space-between;
    }

    .top-nav,.bot-nav{
        color: var(--dark-blue);
        font-size: 14px;
    }

    .top-nav .links p{
        cursor: pointer;
        margin: 0;
    }

    .top-nav .links p:nth-child(2){
        margin-left: 1em;
    }
   
    .bot-nav{
        margin-top: 1.5em;
    }

    .bot-nav ul{
        width: 100%;
        justify-content: right;
        color: var(--dark-blue);
        list-style: none;
        /* transform: translateY(0%); */
        transition: transform 0.5s ease;
    }
    .bot-nav ul li{
        margin-left: 2em;
        font-weight: bold;
        font-size: 16px;
    }

    a{
        color: var(--dark-blue);
    }

    .bot-nav ul li:hover,a:hover{
        color: var(--light-blue);
        transition: all 0.1s ease;
        cursor: pointer;
    }

    .burger{
        display: none;
        cursor: pointer;
    }

    .burger .line{
        width: 25px;
        height: 3px;
        background-color: var(--dark-blue);
    }

    .burger .line:nth-child(2){
        margin: 0.3em 0em;
    }

    .bot-nav .navActive{
        transform: translateY(0%);
    }

    .mobile-close{
        display: none;
        padding: 1em 3em;
    }

    @media only screen and (max-width:900px){
        .burger,.mobile-close{
            display: initial;
        }

        .bot-nav ul{
            position: fixed;
            top: 0;
            left: 0;
            background-color: white;
            flex-direction: column;
            height: 400px;
            transform: translateY(-100%);
            justify-content: space-between;
            padding: 3em 0em;
        }

    }
</style>