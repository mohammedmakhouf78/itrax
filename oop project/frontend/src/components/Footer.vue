<template lang="">
    <div class="footer site-pad">
        <div class="row1">
            <div class="col">
                <ul>
                    <li><img src="../assets/logo-faryfinit.png" alt=""></li>
                    <li>123, San Cristóbal, Republica Dominicana</li>
                    <li>+1(809) 000-0000</li>
                </ul>
            </div>
            <div class="col">
                <h3>Company</h3>
                <ul>
                    <li>About</li>
                    <li>Careers</li>
                    <li>Blog</li>
                    <li>Customers</li>
                    <li>Hire us</li>
                </ul>
            </div>
            <div class="col">
                <h3>Features</h3>
                <ul>
                    <li>Press</li>
                    <li>Release notes</li>
                    <li>Integrations</li>
                    <li>Pricing</li>
                </ul>
            </div>
            <div class="col">
                <h3>Documentation</h3>
                <ul>
                    <li>Support</li>
                    <li>Docs</li>
                    <li>Status</li>
                    <li>API Refrence</li>
                    <li>Tech Requirements</li>
                </ul>
            </div>
            <div class="col">
                <h3>Resources</h3>
                <ul>
                    <li>Help</li>
                    <li>Your Account</li>
                </ul>
            </div>
        </div>

        <div class="row2">
            <div class="col">
                <ul>
                    <li>Privacy & Policy</li>
                    <li>Terms</li>
                    <li>Site Map</li>
                </ul>
            </div>
            <div class="col">
                <SocialLinks />
            </div>
        </div>

        <div class="row3">
            <h3>Copyright © Faryfinit 2021 Farycreate. All rights reserved.</h3>
        </div>
    </div>
</template>
<script>
import SocialLinks from './SocialLinks.vue'
export default {
    components:{
        SocialLinks:SocialLinks
    }
}
</script>
<style scoped>
    .footer{
        background-color: var(--dark-blue);
        color: var(--light);
        padding-bottom: 1em;
    }
    .row1,.row2{
        display: flex;
        justify-content: space-between;
    }

    .row1 .col{
        width: 17%;
    }

    ul{
        list-style: none;
    }

    h3{
        margin: 15px 0px;
        line-height: 1.3;
        font-weight: bold;
        font-size: 22px;
    }

    .row1 ul li,.row2 ul li{
        font-weight: normal;
        font-size: 16px;
        margin-bottom: 1em;
        cursor: pointer;
    }

    .row1 ul li:hover,.row2 ul li:hover{
        color: var(--light-blue);
    }

    .row2{
        margin-top: 3em;
    }

    .row2 ul{
        display: flex;
    }

    .row2 ul li{
        margin-right: 1em;
    }

    .row3 h3{
        text-align: center;
        font-size: 18px;
    }
</style>