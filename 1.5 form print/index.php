<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Задача 5</title>
    </head>
    <body>
        <p>Здравейте! Попълнете следната информация: <br>
        <form name="form" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
            Вашето име: <input type="text" name="ime"><br><br>
            Възраст: <input type="text" name="godini"><br><br>
            <input type="submit" name="subm" value="Изпрати">
        </form>
        </p>
        <?php
        if(isset($_POST['subm']))
        {
            echo "Здравейте, ".$_POST['ime']."<br>"."Вие сте на ".$_POST['godini']." години!";
        }
        ?>
    </body>
</html>
