<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Lab3-1</title>
    </head>
    <body>
        <?php
        for ($i = 1; $i <= 10; $i++) {
            echo "<ul><li>X=", $i;
            echo "<ul><li>X^3=", pow($i, 3), "</li></ul>";
            echo "</li></ul>";
        }
        ?>
    </body>
</html>