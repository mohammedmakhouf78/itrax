<?php
    session_start();

    // $_SESSION['is_logged_in'] = false;
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/main.css">
    <link rel="stylesheet" href="./css/bubbles.css">
    <link rel="stylesheet" href="./css/home.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

    
    <title>Home</title>
</head>
<body>
    <div class="header">
        <div class="bg">
            <?php
                include './components/nav.php';
            ?>
            <div class="header-text">
                <p>Lorem, ipsum dolor.</p>
                <h2>Lorem, ipsum dolor.</h2>
            </div>
        </div>
    </div>

    <?php
        include './components/headerCards.php';
    ?>

    <section>
        <?php
            include './components/slider.php';
        ?>
    </section>

    <section>
        <?php
             if(isset($_COOKIE['is_logged_in']) && $_COOKIE['is_logged_in'] == true)
             {
                 ?>
                     <h2>You are Logged In</h2>
                 <?php
             }
             else{
                 ?>
                     <h2>Please Log In</h2>
                 <?php
             }
        ?>
    </section>


    <div id="bubble">
        <div class="bubble-dot-left bubble-dot">
            <div class="bubble-white-dot"></div>
        </div>
        <div class="bubble-dot-right bubble-dot">
            <div class="bubble-white-dot"></div>
        </div>
    </div>
    <div id="bubble2">
        <div class="bubble-dot-left bubble-dot">
            <div class="bubble-white-dot"></div>
        </div>
        <div class="bubble-dot-right bubble-dot">
            <div class="bubble-white-dot"></div>
        </div>
    </div>
    <div id="bubble3">
        <div class="bubble-dot-left bubble-dot">
            <div class="bubble-white-dot"></div>
        </div>
        <div class="bubble-dot-right bubble-dot">
            <div class="bubble-white-dot"></div>
        </div>
    </div>
    <div id="bubble4">
        <div class="bubble-dot-left bubble-dot">
            <div class="bubble-white-dot"></div>
        </div>
        <div class="bubble-dot-right bubble-dot">
            <div class="bubble-white-dot"></div>
        </div>
    </div>



    <script src="./scripts/bubbles.js"></script>
    <script src="./scripts/mobileNav.js"></script>
    <script src="./scripts/slider.js"></script>

    <?php
        include './components/footer.php'
    ?>

</body>
</html>