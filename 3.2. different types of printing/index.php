<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Lab3-2</title>
    </head>
    <body>
        <?php
        $a = 0;
        echo "<table><tr>";
        while ($a < 9) {
            echo "<td>abc</td> ";
            $a++;
        }

        echo "</tr><tr>";
        $a = 0;
        do {
            echo "<td>xyz</td>";
            $a++;
        } while ($a < 9);
        echo "</tr><tr>";

        for ($i = 1; $i <= 9; $i++) {
            echo "<td>$i</td>";
        }
        echo "</tr></table><ol>";
        $l = "A";
        for ($a = 1; $a <= 6; $a++) {
            echo "<li>Item  $l</li>";
            $l++;
        }
        echo "</ol>";
        ?>
    </body>
</html>
