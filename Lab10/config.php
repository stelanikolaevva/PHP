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
        $dbName = 'info_books';
        $dbConn = mysqli_connect($host, $dbUser,$dbPass,$dbName);
        if (!$dbConn) {
            die('Не може да се осъществи връзка със сървъра.');
        }
        ?>

    </body>
</html>
