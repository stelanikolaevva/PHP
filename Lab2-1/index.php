<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Lab2-1</title>
    </head>
    <body>
        <fieldset>
            <form method="post" action="<?php $_PHP_SELF ?>">
                Please enter your age: <input type="text" name="age"><br><br>
                Please enter the price:<input type="text" name="price"><br><br>
                <input type="submit" name="subm" value="Go">
            </form>
        </fieldset>
        <?php
        if (isset($_POST['subm'])) {
            if ($_POST['age'] <= 6 || $_POST['age'] >= 65):
                $_POST['price'] /= 2;
            endif;
            echo "Your age is " . $_POST['age'] . ". The price is $" . round($_POST['price'], 2) . "<br>";
        }
        ?>
    </body>
</html>
