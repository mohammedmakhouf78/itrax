<nav class="d-flex">
    <div>
        <img src="./images/logo.png" alt="">
    </div>
    <ul class="d-flex">
        <button class="btn">X</button>
        <li>Home</li>
        <li>Portfolio</li>
        <li>Blog</li>
        <li>Shop</li>
        <?php
            if(isset($_COOKIE['is_logged_in']) && $_COOKIE['is_logged_in'] == true)
            {
                ?>
                    <li>
                        <a href="./controllers/LogoutController.php">Logout</a>
                    </li>
                <?php
            }
            else{
                ?>
                    <li>
                        <a href="./login.php">Login</a>
                    </li>
                    <li>
                        <a href="./register.php">Register</a>
                    </li>
                <?php
            }
        ?>
    </ul>
    <div class="burger">
        <div class="line1"></div>
        <div class="line2"></div>
        <div class="line3"></div>
    </div>
</nav>