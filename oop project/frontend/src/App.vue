<template>
  <div id="app">
      <div class="site-container">
        <NavBar />

        <router-view />

        <Footer />
    </div>
  </div>
</template>

<script>
import NavBar from './components/NavBar.vue'
import Footer from './components/Footer.vue'
export default {
  name: 'App',
  components:{
    NavBar:NavBar,
    Footer:Footer
  },
}
</script>

<style>
  *{
    padding: 0;
    margin: 0;
  }

  html{
    font-family: 'Josefin Sans', sans-serif;
  }

  a{
    text-decoration: none;
  }

  input{
    width: 100%;
    border: none;
    padding: 6px 20px;
    box-sizing: border-box;
    outline: none;
    font-size: 18px;
  }

  .form-control{
    border-bottom: 1px solid #999;
    display: flex;
    align-items: center;
    margin-bottom: 2em;
    width: 400px;
    background-color: var(--white);
    padding: 0.5em 1em;
  }

  .site-pad{
    padding: 10em 3em;
  }

  .bg-overlay{
    background-image: url('./assets/img-bg-07.png');
    background-repeat: no-repeat;
    background-position: right;
    background-size: 70% 100%;
  }

  .btn{
    font-weight: bold;
    font-size: 20px;
    color: var(--light);
    background-color: var(--light-blue);
    border-radius: 4px;
    padding: 16px 32px;
    border: none;
  }

  .light-btn{
    background-color: var(--light);
    color: var(--dark-blue);
    margin-left: 1em;
  }

  .btn:hover{
    cursor: pointer;
    background-color: #19B1FF;
    transform: translateY(-5%);
    box-shadow: 15px 16px 36px -15px rgba(0,0,0,0.75);
    transition: all 0.2s ease;
  }

  .light-btn:hover{
    background-color: var(--light);
  }

  h4{
    padding: 8px 16px;
    background-color: var(--light-blue);
    font-weight: bold;
    font-size: 13px;
    text-align: center;
    border-radius: 15px;
    color: var(--light);
    display: inline-block;
  }

  h2{
    font-weight: bold;
    font-size: 55px;
    color: var(--dark-blue);
    margin: 20px 0px;
    line-height: 1.3;
    text-transform: capitalize;
  }

  p{
    font-weight: normal;
    font-size: 18px;
    color: var(--light-gray);
    line-height: 1.8;
    margin-bottom: 1em;
  }

  img{
    width: 100%;
  }

  .card{
    width: 25%;
    max-width: 25%;
    padding: 0em 1em;
  }

  .card img{
    width: auto;
  }

  .card .content{
    padding: 0em 1.7em;
    text-align: center;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    background-color: white;
    height: 400px;
    border-radius: 9px;
    border: 1px solid #eaecec;
    box-shadow: 0px 9px 25px 0px #dadee0;
    transition: all 0.25s ease-in-out;
  }

  .card .content:hover{
    transform: translateY(-1%);
  }

  .card .content h3{
    font-weight: bold;
    font-size: 25px;
    color: var(--dark-blue);
    margin: 30px 0px;
  }

  @media only screen and (max-width:1060px){
    h2{
      font-size: 30px;
    }
  }
</style>
