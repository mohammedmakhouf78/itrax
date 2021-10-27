<template lang="">
    <div class="register site-pad">
        <div class="col1">
            <h2>Sign up</h2>
            <form @submit="submit" method="POST">
                <div class="form-control">
                    <label for="name">
                        <i class="fas fa-user"></i>
                    </label>
                    <input v-model="data.name" type="text" id="name" placeholder="Your Name">
                </div>
                <div class="form-control">
                    <label for="email">
                        <i class="far fa-envelope"></i>
                    </label>
                    <input v-model="data.email" type="text" id="email" placeholder="Your Email">
                </div>
                <div class="form-control">
                    <label for="password">
                        <i class="fas fa-lock"></i>
                    </label>
                    <input v-model="data.pass" type="text" id="password" placeholder="Your Password">
                </div>
                <div class="form-control">
                    <label for="confirm">
                        <i class="fas fa-lock"></i>
                    </label>
                    <input v-model="data.confirm" type="text" id="confirm" placeholder="Repeat your password">
                </div>
                <button class="btn">Register</button>
                <div class="link">
                    <router-link :to="{name:'login'}">
                        i am already a membaer
                    </router-link>
                </div>
            </form>
        </div>
        <div class="col2">
            <img src="../assets/signup-image.jpg" alt="">
        </div>
        <Message :msg="message.msg" :cls="message.cls" :showing="message.showMsg" />
    </div>
</template>
<script>
export default {
    data() {
        return {
            data:{
                name:"",
                email:"",
                pass:"",
                confirm:""
            },
        }
    },
    methods: {
        submit:function(e){
            e.preventDefault();
            if(this.data.pass != this.data.confirm){
               this.message.msg = "passwords dont match"
               this.error()
               return
            }else if(this.data.pass == ""){
                this.message.msg = "Please enter the password"
                this.error()
                return
            }else if(this.data.name == ""){
                this.message.msg = "Please enter the name"
                this.error()
                return
            }else if(this.data.email == ""){
                this.message.msg = "Please enter the email"
                this.error()
                return
            }

            this.$axios.post('register.php',{
                name:this.data.name,
                email:this.data.email,
                pass:this.data.pass,
                confirm:this.data.confirm
            })
            .then(res => {
               if(res.data.success){
                   this.message.msg = "Thanks for joining"
                   this.success();
                   this.$store.dispatch('logIn',res.data.data.email);
                   setTimeout(() => {
                       this.$router.push({name:'home'})
                   }, 2000);
               }else{
                   this.message.msg = "Sorry Try again"
                   this.error();
               }
            })
            .catch((err) => {
                this.message.msg = "There was an error"
                this.error();
                console.log(err)
            })
        }
    },
}
</script>
<style scoped>
    .register{
        display: flex;
        justify-content: space-around;
        align-items: center;
        background-color: #F1F1F3;
    }
    .col1{
        width: 40%;
    }
    .col2{
        width: 60%;
        overflow: hidden;
    }
    .link{
        margin-top: 2em;
    }

</style>