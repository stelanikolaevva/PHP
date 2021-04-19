<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Lab5-1</title>
    </head>
    <body>
        <?php
        function recArea($length, $width) {
            return $length * $width;
        }

        $length = rand(1, 100);
        $width = rand(1, 100);
        echo "Лице на правоъгълник със случайно генерирани числа<br> Правоъгълник с дължина $length и ширина $width има лице ", recArea($length, $width);
        ?>
        <p><br><br><br>
        <form name="form" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            Въведете дължина и ширина на правоъгълника.
            <br>
            Дължина:<input type="number" name="lenght"/>
            Ширина:<input type="number" name="width"/>
            <br><input type="submit" name="submit" value="GO"/>
        </form>
    </p>
    <?php
    include("manual.php");
    ?>

</body>
</html>
