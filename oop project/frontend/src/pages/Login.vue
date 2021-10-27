<template>
    <div class="login site-pad">
        <div class="col1">
            <h2>Login</h2>
            <form @submit="submit" method="POST">
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
                    <input v-model="data.password" type="text" id="password" placeholder="Your Password">
                </div>
                <button class="btn">Log In</button>
                <div class="link">
                    <router-link :to="{name:'register'}">
                        Create an account
                    </router-link>
                </div>
            </form>
        </div>
        <div class="col2">
            <img src="../assets/login-image.jpeg" alt="">
        </div>
    <Message :msg="message.msg" :cls="message.cls" :showing="message.showMsg" />
    </div>
</template>
<script>

export default {
    data() {
        return {
            data:{
                email:"",
                password:""
            }
        }
    },
    methods: {
        submit:function(e){
            e.preventDefault();
            if(this.data.password == ""){
                this.message.msg = "Please enter the password"
                this.error()
                return
            }else if(this.data.email == ""){
                this.message.msg = "Please enter the email"
                this.error()
                return
            }

            this.$axios.post('Login.php',{
                email:this.data.email,
                password:this.data.password,
            })
            .then(res => {
               if(res.data.success){
                   this.message.msg = "You are Logged in"
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
    .login{
        display: flex;
        justify-content: space-around;
        align-items: center;
        background-color: #F3F5F6;
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

    img{
        height: 500px;
        object-fit: cover;
    }
</style>