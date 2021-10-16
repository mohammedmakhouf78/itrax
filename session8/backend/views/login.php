<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/login.css">
    <title>Document</title>
</head>
<body>
    <!-- https://codepen.io/vineethtrv/pen/NxqKoY -->
    <div class="container">
        <div class="form-con">
            <div class="panda">
                <div class="lear"></div>
                <div class="rear"></div>
                <div class="head"></div>
                <div class="eyes">
                    <div class="leye">
                        <div class="weye">
                            <div class="beye"></div>
                        </div>
                    </div>
                    <div class="reye">
                    <div class="weye">
                            <div class="beye"></div>
                        </div>
                    </div>
                </div>
                <div class="mouth"></div>
                <div class="body"></div>
                <div class="foot">
                    <div class="finger"></div>
                </div>
                <div class="foot rf">
                    <div class="finger"></div>
                </div>
            </div>
            <form action="../controllers/LoginController.php" method="POST">
                <div class="hand"></div>
                <div class="hand rh"></div>
                <h2>Panda Login</h2>
                <div class="form-controller">
                    <input type="text" id="email" name="email">
                    <label for="email">E-mail</label>
                </div>
                <div class="form-controller">
                    <input type="password" id="pass" name="password">
                    <label for="pass">Password</label>
                </div>
                <div class="s-con">
                    <button>Login</button>
                </div>
            </form>
        </div>
    </div>


    <script src="../js/login.js"></script>
</body>
</html>