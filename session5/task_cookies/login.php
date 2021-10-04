<?php
    session_start();
    if(isset($_COOKIE['is_logged_in']) && $_COOKIE['is_logged_in'] == true)
    {
        header('location:./index.php');
    }
    $msgs = $_SESSION['login_msg'];
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/main.css">
    <link rel="stylesheet" href="./css/login.css">
    <link rel="stylesheet" href="./css/bubbles.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono&display=swap" rel="stylesheet">
    <title>Login</title>
</head>
<body>
    <div id="login">
        <div class="container">
            <div class="left-image">
                <img src="./images/login.jpeg" alt="">
            </div>
            <div class="form-container">
                <form action="./controllers/LoginController.php" method="POST">
                <a href="./register.php">Register</a>
                    <div class="form-control">
                        <div>
                            <label for="email">Email</label>
                        </div>
                        <input type="email" name="email" id="email" placeholder="Your email">
                        <p>
                            <?php
                                if (isset($msgs['email']))
                                {
                                    echo $msgs['email'];
                                } 
                            ?>
                        </p>
                    </div>
                    <div class="form-control">
                        <div>
                            <label for="pass">Password</label>
                        </div>
                        <input type="password" name="pass" id="pass" placeholder="Your password">
                        <p>
                            <?php
                                if (isset($msgs['pass']))
                                {
                                    echo $msgs['pass'];
                                } 
                            ?>
                        </p>
                    </div>
                    <p>
                            <?php
                                if (isset($msgs['invalid']))
                                {
                                    echo $msgs['invalid'];
                                } 
                            ?>
                        </p>
                    <div class="form-control">
                        <button class="btn" type="submit">
                            Login
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
    <?php
        $_SESSION['login_msg'] = [];
    ?>

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

</body>
</html>