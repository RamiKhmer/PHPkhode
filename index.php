<?php

session_set_cookie_params(60 * 60);
session_start();

// if (!isset($_COOKIE["username"])) {
if (!isset($_SESSION["username"])) {
    header("Location: /khode/login.php?ref=" . $_SERVER["PHP_SELF"]);
    exit();
}


?>




<!DOCTYPE html>
<hmtl>

    <head>
        <title>
            Home
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


    <body>
        <center>
        <br><br><br><br>
            <div class="login100-pic js-tilt" data-tilt>
                <img src="images/mcu.png" alt="IMG" style="width: 100%">
            </div>
            <br><br><br><br>
            <h1>Welcome Bus Booking System</h1><br>
            <div class="container-login100-form-btn" style="width: 20%">

                <a href="/khode/logout.php" class="login100-form-btn">Logout</a>

            </div>


        </center>

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