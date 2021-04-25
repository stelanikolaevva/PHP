<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Lab4-2</title>
    </head>
    <body>
        <?php
        $city = array("Tokyo", "Mexico City", "New York City", "Mumbai", "Seoul", "Shanghai", "Lagos", "Buenos Aires", "Cairo", "London");
        foreach ($city as $value) {
            echo $value . ", ";
        }
        sort($city);

        echo "<ul>";
        foreach ($city as $value) {
            echo "<li>" . $value . "</li>";
        }
        echo "</ul>";

        array_push($city, "Los Angeles", "Calcutta", "Osaka", "Beijing");

        sort($city);
        echo "<ol>";
        foreach ($city as $value) {
            echo "<li>" . $value . "</li>";
        }
        echo "</ol>";


        echo "<table border=2 ><tr><td>Key</td><td>Value</td></tr>";
        foreach ($city as $key => $value) {
            echo "<tr><td>$key</td><td>$value</td></tr>";
        }
        echo "</table>";
        ?>
    </body>
</html>
