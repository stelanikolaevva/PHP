<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Lab2-2</title>
    </head>
    <body>
        <p> Find solution for ax^2 + bx +c <br>
        <form name="form" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            a: <input type="text" name="a"><br>
            b: <input type="text" name="b"><br>
            c: <input type="text" name="c"><br>
            <input type="submit" name="find" value="Find x!">
        </form>
    </p>
    <?php
    if (isset($_POST['find'])) {
        $a = $_POST['a'];
        $b = $_POST['b'];
        $c = $_POST['c'];
        if ($a == 0) {
            if ($b == 0) {
                echo "nqma realni koreni";
            } else {
                echo "x= " . round(($c / $b), 2);
            }
        } else {
            $d = pow($b, 2) - 4 * $a * $c;
            $d = sqrt($d);
            if ($d >= 0) {
                if ($d == 0) {
                    echo "x1=x2= " . (-$b / (2 * $a)) . "<br>";
                } else {
                    $x1 = (-$b + $d) / (2 * $a);
                    $x2 = (-$b - $d) / (2 * $a);
                    echo "x1= " . round($x1, 2) . "<br>";
                    echo "x2= " . round($x2, 2) . "<br>";
                }
            } else
                echo "Nqma realni koreni!<br>";
        }
    }
    ?>
</body>
</html>
