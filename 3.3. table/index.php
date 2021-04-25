<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Lab3-3</title>
    </head>
    <body>
        <?php
        echo "<br><table border=1>";
        for ($i = 1; $i <= 7; $i++) {
            echo"<tr>";
            for ($j = 1; $j <= 7; $j++) {
                echo "<td>" . $i * $j . "</td>";
            }
            echo"</tr>";
        }
        echo "</table>";
        ?>
    </body>
</html>
