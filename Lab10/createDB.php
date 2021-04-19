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
        $host = 'localhost';
        $dbUser = 'root';
        $dbPass = '';
        $dbConn = mysqli_connect($host, $dbUser,$dbPass);
        $queryResource = mysqli_query($dbConn, "CREATE DATABASE info_books");
        if ($queryResource) {
            echo "Базата данни е създадена. <br>";
        } else {
            die( "Грешка при създаване на базата данни: ");
        }
        ?>
    </body>
</html>
