<?php




?>




<!DOCTYPE html>
<hmtl>

    <head>
        <title>
            KHODE
        </title>

    </head>
    <style type="text/css">
        h3 {
            color: red;
        }

        
    </style>

    <body>
        <center>
            <?php

            for ($n = 1; $n <= 10; $n++) {
                $number = $n;
                echo "<h3>មេគុណ $n</h3> </b><br><br>";
                for ($i = 1; $i <= 10; $i++) {

                    echo $number . " x " . $i . " = " . $number * $i . "<br>";
                }

                echo "<br><br><hr><br><br>";
            }





            ?>
        </center>
    </body>
</hmtl>