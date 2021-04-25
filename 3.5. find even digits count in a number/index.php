<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Lab3-5</title>
    </head>
    <body>
        <p>
        <form method="post" action="<?php $_PHP_SELF ?>">
            Въведете число: <input type="text" name="chislo"/><br>
            <input type="submit" name="subm" value="Провери!"/>
        </form>
    </p>
    <?php
    if (isset($_POST['subm'])) {
        $br = 0;
        $x = $_POST['chislo'];
        for (;;) {
            $y = $x % 10;
            if ($y % 2 == 0) {
                //echo $y;
                $br++;
            }
            $x = $x / 10;
            $x = intval($x);
            if ($x == 0) {
                break;
            }
        }
        echo 'Числото ' . $_POST['chislo'] . " има $br четни цифри";
    }
    ?>
</body>
</html>
