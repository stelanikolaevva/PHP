<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        include "config.php";
        if (!mysqli_select_db($dbConn, $dbName)) {
            die('Не може да се селектира базата от данни.');
        }
        echo "Базата данни е селектирана. <br>";
        ?>
    </body>
</html>
