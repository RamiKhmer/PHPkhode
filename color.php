<?php

session_set_cookie_params(60 * 60);
session_start();

if (!isset($_SESSION["username"])) {
    header("Location: /khode/login.php?ref=" . $_SERVER["PHP_SELF"]);
    exit();
}


?>




<!DOCTYPE html>
<hmtl>

    <head>
        <title>
            GET AND POST
        </title>

    </head>
    <style type="text/css">
        body {
            background: <?php

                        echo $_GET["color"];

                        ?>
        }

        form {
            background: <?php

                        echo $_GET["fcolor"];

                        ?>
        }
    </style>

    <body>
        <center>

            <form>

                Change Background Color ​​ <input type="color" name="color"><br>
                Change Form Background Color ​​ <input type="color" name="fcolor"><br>




                <input type="submit" name="submit">
                <br>
                <a href="/khode/logout.php">Logout</a>


            </form>

        </center>
    </body>
</hmtl>