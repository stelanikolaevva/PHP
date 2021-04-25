<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Lab2-6</title>
    </head>
    <body>
        <h2>Squares and Square roots for the Numbers 1-12</h2>
        <?php
        echo "<table border='2'>";
        echo "<tr><td>x</td><td>Square</td><td>Square root</td></tr>";
        for ($x = 1; $x < 13; $x++) {
            $result1 = pow($x, 2);
            $result2 = round(sqrt($x), 2);
            echo "<tr><td>$x</td><td>$result1</td><td>$result2</td></tr>";
        }
        echo "</table>"
        ?>

    </body>
</html>
