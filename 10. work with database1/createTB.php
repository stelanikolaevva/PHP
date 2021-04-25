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
        include 'config.php';
        $sql2 = "CREATE TABLE books (id INT(13) NOT NULL,"
                . "title VARCHAR(32) DEFAULT NULL,"
                . "author VARCHAR(30) DEFAULT NULL,"
                . "publisher VARCHAR(20) DEFAULT NULL,"
                . "year INT(6) DEFAULT NULL,"
                . "PRIMARY KEY (id))"
                . " ENGINE=INNODB DEFAULT CHARSET=utf8";
        $result = mysqli_query($dbConn, $sql2);
        if (!$result)
            die('Грешка при създаване на таблицата.');
        echo "Таблицата е създадена!";
        ?>
    </body>
</html>
