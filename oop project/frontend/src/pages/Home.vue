<template lang="">
    <div>
        <Header />

        <Service />

        <DigitalMarket />

        <SocialNetwork />

        <Consult />

        <Testimony />

        <IntroVideo />

        <Pricing />

        <LatestPosts />

        <Contact />
    </div>
</template>
<script>
import Header from '../components/Header.vue'
import Service from '../components/Service.vue'
import DigitalMarket from '../components/DigitalMarket.vue'
import SocialNetwork from '../components/SocialNetwork.vue'
import Consult from '../components/Consult.vue'
import Testimony from '../components/Testimony.vue'
import IntroVideo from '../components/IntroVideo.vue'
import Pricing from '../components/Pricing.vue'
import LatestPosts from '../components/LatestPosts.vue'
import Contact from '../components/Contact.vue'
export default {
    components:{
        Header:Header,
        Service:Service,
        DigitalMarket:DigitalMarket,
        SocialNetwork:SocialNetwork,
        Consult:Consult,
        Testimony:Testimony,
        IntroVideo:IntroVideo,
        Pricing:Pricing,
        LatestPosts:LatestPosts,
        Contact:Contact
    },
}
</script>
<style lang="">
    
</style>