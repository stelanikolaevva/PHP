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
        $conn = mysqli_connect($host, $dbUser, $dbPass);
        $queryResource = mysqli_query($conn, "CREATE DATABASE hotel");
        if ($queryResource) {
            echo "Базата данни е създадена. <br>";
        } else {
            die("Грешка при създаване на базата данни: ");
        }
        include "config.php";
        $sql = "CREATE TABLE  guestbook(GuestID INT(4) NOT NULL,"
                . "Name VARCHAR(60) NOT NULL,"
                . "Email VARCHAR(40) NOT NULL,"
                . "Comment VARCHAR(100) NOT NULL,"
                . "DateTime TIMESTAMP,"
                . "PRIMARY KEY (GuestID))";
        if ($conn->query($sql) === TRUE) {
            echo "Table Guestbook created successfully<br>";
        } else {
            echo "Error creating table: " . $conn->error;
        }
        $sql = " ALTER TABLE guestbook MODIFY GuestID INT(4) NOT NULL AUTO_INCREMENT";
        $result = mysqli_query($conn, $sql);
        ?>
    </body>
</html>
