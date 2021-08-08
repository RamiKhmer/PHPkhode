<pre><?php

        if (array_key_exists("surname", $_POST) && 
        array_key_exists("lastname", $_POST) && 
        array_key_exists("age", $_POST) && 
        array_key_exists("password", $_POST) &&
        array_key_exists("repassword", $_POST)
        ) {
            if($_POST["password"] == $_POST["repassword"]){
                echo "មានឈ្មោះថា : {$_POST["surname"]} {$_POST["lastname"]} {$_POST["age"]}";

            }else{
                echo "Password not match";
            }
        } else {
            echo "The field can not be blank";
        }


        ?></pre>




<!DOCTYPE html>
<hmtl>

    <head>
        <title>
            GET AND POST
        </title>

    </head>
    <style type="text/css">



    </style>

    <body>
        <center>

            <form method="POST">
                ត្រកូលៈ <input type="text" name="surname"><br>
                ឈ្មោះៈ ​​ <input type="text" name="lastname"><br>
                អាយុៈ​​​ <input type="number" name="age"><br>
                Password​​​ <input type="password" name="password"><br>
                Comfirm Password​​​ <input type="password" name="repassword"><br>


                <input type="checkbox" name="boolean" value="1"><br>
                <input type="submit" name="submit">


            </form>

        </center>
    </body>
</hmtl>