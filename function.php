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



    </style>

    <body>
        <center>
            <?php

            // ----------------------This is a simple function------------------------------------

            function culAge($bYear = null)
            {
                if ($bYear == null) {
                    $gg = "Please Enter Your Name";
                } else {
                    if ($bYear < 1900) {
                        $gg = "U maight be wrong of your age";
                    } else {
                        $gg = date("Y") - $bYear;
                    }
                }

                return $gg;
            }

            $result = culAge(123);
            //echo $result;


            // ----------------------This is a swap Number function------------------------------------


            function swapNum(&$one, &$two)
            {
                $temp = $one;

                $one = $two;
                $two = $temp;
            }

            $a = 1;
            $b = 2;

            // echo $a.$b."<br>";

             swapNum($a, $b);

            //  echo "After Swapping a = ".$a." b = ".$b."\n";


            // ----------------------This is a Recursive function------------------------------------

            function oneTo($num){
                if ($num==1) return 1;
                return oneTo($num-1).$num;

                
            }

            echo oneTo(5);



            ?>
        </center>
    </body>
</hmtl>