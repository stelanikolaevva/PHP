<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Задача 4</title>
    </head>
    <body>
        <p>Please enter your name: <br>
        <form name="form" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
            <input type="text" name="ime">
            <input type="submit" name="subm" value="Go">
        </form>
        </p>
        <?php
        if(isset($_POST['subm']))
        {
            echo "Your name is ".$_POST['ime']."!";
        }
?>
    </body>
</html>
