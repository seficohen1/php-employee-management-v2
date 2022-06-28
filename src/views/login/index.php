<!DOCTYPE html>
<html lang="en">

<head>
    <title>Employee Management</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="./assets/images/icons/favicon.ico" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="./assets/vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="./assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="./assets/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="./assets/vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="./assets/vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="./assets/vendor/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="./assets/vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="./assets/vendor/daterangepicker/daterangepicker.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="./assets/css/util.css">
    <link rel="stylesheet" type="text/css" href="./assets/css/login.css">
    <!--===============================================================================================-->
</head>

<body>

    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
                <div class="login100-form-title" style="background-image: url(images/bg-01.jpg);">
                    <span class="login100-form-title-1">
                        Sign In
                    </span>
                </div>
                <?php

                ?>

                <form class="login100-form validate-form" method="POST" action='<?= BASE_URL . 'login/authUser' ?>'>
                    <div class="wrap-input100 validate-input m-b-26" data-validate="Username is required">
                        <span class="label-input100">Username</span>
                        <input class="input100" type="text" name="username" placeholder="Enter username">
                        <span class="focus-input100"></span>
                    </div>

                    <div class="wrap-input100 validate-input m-b-18" data-validate="Password is required">
                        <span class="label-input100">Password</span>
                        <input class="input100" type="password" name="pass" placeholder="Enter password">
                        <span class="focus-input100"></span>
                    </div>

                    <div class="flex-sb-m w-full p-b-30">
                        <div class="contact100-form-checkbox">
                            <input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
                            <label class="label-checkbox100" for="ckb1">
                                Remember me
                            </label>
                        </div>

                        <div>
                            <a href="#" class="txt1">
                                Forgot Password?
                            </a>
                        </div>
                    </div>
                    <div class="container-login100-form-btn">
                        <button type="submit" class="login100-form-btn">
                            Login
                        </button>
                    </div>
                    <?php
                    if(isset($_SESSION['userId'])) {
                        echo '<p class="pt-4 text-danger">Wrong email or password!</p>';
                    }
                   if(isset($_GET['logout']) && !isset($_GET['login'])) {
                    echo '<p class="pt-4"><strong>Logout Success!</strong><br/> Please, login to the dashboard again.</p>';
                   } 
                   else if(!isset($_GET['login'])&& !isset($_GET['logout=true'])) {
                     exit('<p class="pt-4">Please, login to the dashboard page.</p>');
                   }
                   else {
                       $loginCheck = $_GET['login'];
                       if($loginCheck == 'error') {
                           echo '<p class="pt-4 text-danger">Wrong email or password!</p>';
                       }
                   }

                    ?>
                </form>
            </div>
        </div>
    </div>

    <!--===============================================================================================-->
    <script src="./assets/vendor/jquery/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
    <script src="./assets/vendor/animsition/js/animsition.min.js"></script>
    <!--===============================================================================================-->
    <script src="./assets/vendor/bootstrap/js/popper.js"></script>
    <script src="./assets/vendor/bootstrap/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
    <script src="./assets/vendor/select2/select2.min.js"></script>
    <!--===============================================================================================-->
    <script src="./assets/vendor/daterangepicker/moment.min.js"></script>
    <script src="./assets/vendor/daterangepicker/daterangepicker.js"></script>
    <!--===============================================================================================-->
    <script src="./assets/vendor/countdowntime/countdowntime.js"></script>
    <!--===============================================================================================-->
    <script src="./assets/js/main.js"></script>

</body>

</html>