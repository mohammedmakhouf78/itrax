<?php
    session_start();
    if(isset($_COOKIE['is_logged_in']) && $_COOKIE['is_logged_in'] == true)
    {
        header('location:./index.php');
    }
    $msgs = $_SESSION['register_msg'];
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/main.css">
    <link rel="stylesheet" href="./css/register.css">
    <link rel="stylesheet" href="./css/bubbles.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono&display=swap" rel="stylesheet">
    <title>Register</title>
</head>
<body id="body">
    <div id="register">
        <div class="container">
            <div class="left-image">
                <img src="./images/2.jpeg" alt="">
            </div>
            <div class="form-container">
                <form action="./controllers/RegisterController.php" method="POST">
                <a href="./login.php">Login</a>
                    <div class="form-control">
                        <div>
                            <label for="name">Name</label>
                        </div>
                        <input type="text" name="name" id="name" placeholder="Your name">
                        <p>
                            <?php
                                if (isset($msgs['name']))
                                {
                                    echo $msgs['name'];
                                } 
                            ?>
                        </p>
                    </div>
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
                    <div class="form-control">
                        <div>
                            <label for="confirm_pass">Confirm Password</label>
                        </div>
                        <input type="password" name="confirm_pass" id="confirm_pass" placeholder="Confirm password">
                        <p>
                            <?php
                                if (isset($msgs['confirm']))
                                {
                                    echo $msgs['confirm'];
                                } 
                            ?>
                        </p>
                    </div>
                    <div class="form-control">
                        <button class="btn" type="submit">
                            Create an account
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <?php
        $_SESSION['register_msg'] = [];
        var_dump($_COOKIE);
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