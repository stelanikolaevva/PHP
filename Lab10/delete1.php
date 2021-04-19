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
        $sql5 = "DELETE FROM books WHERE publisher='Просвета'";
        mysqli_query($dbConn, $sql5);
        $result = mysqli_query($dbConn, "SELECT * FROM books");
        echo "<ul>";
        while ($row = mysqli_fetch_array($result)) {
            echo "<li>" . $row['id'] . " " . $row['title'] . " " . $row['author'] . " " . $row['publisher'] . " " . $row['year'] . "</li>";
        }
        echo "</ul>";
        ?>
        <a href="index.php">Назад</a>
    </body>
</html>
