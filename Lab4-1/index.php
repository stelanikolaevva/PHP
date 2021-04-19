<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Lab4-1</title>
    </head>
    <body>
        <?php
        $students = array('Иван Иванов' => 4, 'Драган Драганов' => 5.45, 'Димо Петров' => 5.67);
        echo "<ol>";
        foreach ($students as $ime => $ocenka) {
            echo "<li>Студент " . $ime . " има успех: " . $ocenka . "</li>";
        }
        echo "</ol>";

        echo "<ul>";
        foreach ($students as $ime => $ocenka) {
            echo "<li>Студент " . $ime . " има успех: " . $ocenka . "</li>";
        }
        echo "</ul>";

        echo "<table border=2 ><tr><td>Име и Фамилия</td><td>Oценка</td></tr>";
        foreach ($students as $ime => $ocenka) {
            echo "<tr><td>$ime</td><td align=right>$ocenka</td></tr>";
        }
        echo "</table>";
        ?>
    </body>
</html>
