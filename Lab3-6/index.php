<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Lab3-6</title>
    </head>
    <body>
        <p>
        <form method="post" action="<?php $_PHP_SELF ?>">
            Въведете сума X [1-18]: <input type="text" name="X"/><br>
            <input type="submit" name="subm" value="Провери!"/>
        </form>
    </p>
    <?php
    if (isset($_POST['subm'])) {
        $x = $_POST['X'];
        for ($i = 1; $i < 100; $i++) {
            $n = $i;

            $d = $n % 10;
            $n /= 10;
            $n = intval($n);
            $sum = $d + $n;
            if ($sum == $x) {
                echo $i . " ";
            }
        }
        if ($x == 1) {
            echo '100';
        }
    }
    ?>
</body>
</html>
