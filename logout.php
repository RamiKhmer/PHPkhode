<?php

        session_start();
        
        // setcookie("username","rami",1,"/");
        unset($_SESSION["username"]);
        header("Location: /khode/login.php");

         exit();
