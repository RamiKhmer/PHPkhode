<?php

session_set_cookie_params(60 * 60);

session_start();

if (isset($_POST["name"]) && isset($_POST["password"])) {

    if ($_POST["name"] == "" || $_POST["password"] == "") {

        echo "Please Field the name and password";
    } else {
        if ($_POST["name"] == "rami" && $_POST["password"] == "12345") {
            echo "Welcome";

            $_SESSION["username"] = "rami";
            // setcookie("username","rami",time()+7*24*60*60,"/","");

            if ($_GET["ref"]) {
                header("Location: " . $_GET["ref"]);
            } else {
                header("Location: /khode");
            }
        } else {
            echo "Wrong";
        }
    }
}


?>




<!DOCTYPE html>
<hmtl>

    <head>
        <title>
            GET AND POST
        </title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--===============================================================================================-->
        <link rel="icon" type="image/png" href="images/icons/favicon.ico" />
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="css/util.css">
        <link rel="stylesheet" type="text/css" href="css/main.css">
        <!--===============================================================================================-->

    </head>
    <style type="text/css">



    </style>

    <body>
        <!-- <center>

            <form method="POST">

                ឈ្មោះៈ ​​ <input type="text" name="name"><br>

                Password​​​ <input type="password" name="password"><br>

                <input type="submit" name="submit">


            </form>

        </center> -->
        <div class="limiter">

            <div class="container-login100">

                <div class="wrap-login100">
                    <div class="login100-pic js-tilt" data-tilt>
                        <img src="images/mcu.png" alt="IMG"><br>
                        <img src="images/img-01.png" alt="IMG">
                    </div>

                    <form class="login100-form validate-form" method="POST">
                        <span class="login100-form-title">

                            Bus Booking System
                        </span>

                        <div class="wrap-input100 validate-input" data-validate="Username is required">
                            <input class="input100" type="text" name="name" placeholder="Username">
                            <span class="focus-input100"></span>
                            <span class="symbol-input100">
                                <i class="fa fa-user" aria-hidden="true"></i>
                            </span>
                        </div>

                        <div class="wrap-input100 validate-input" data-validate="Password is required">
                            <input class="input100" type="password" name="password" placeholder="Password">
                            <span class="focus-input100"></span>
                            <span class="symbol-input100">
                                <i class="fa fa-key" aria-hidden="true"></i>
                            </span>
                        </div>

                        <div class="container-login100-form-btn">
                            <!-- <button class="login100-form-btn">
                                Login
                            </button> -->
                            <input type="submit" name="Login" class="login100-form-btn">
                        </div>

                        <div class="text-center p-t-12">
                            <span class="txt1">
                                Forgot
                            </span>
                            <a class="txt2" href="#">
                                Username / Password?
                            </a>
                        </div>

                        <div class="text-center p-t-136">
                            <a class="txt2" href="#">
                                Create your Account
                                <i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>




        <!--===============================================================================================-->
        <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
        <!--===============================================================================================-->
        <script src="vendor/bootstrap/js/popper.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
        <!--===============================================================================================-->
        <script src="vendor/select2/select2.min.js"></script>
        <!--===============================================================================================-->
        <script src="vendor/tilt/tilt.jquery.min.js"></script>
        <script>
            $('.js-tilt').tilt({
                scale: 1.1
            })
        </script>
        <!--===============================================================================================-->
        <script src="js/main.js"></script>



    </body>
</hmtl>