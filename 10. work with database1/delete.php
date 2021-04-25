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
        $result = mysqli_query($dbConn, "SELECT * FROM books");
        echo "<table border=2px><tr><th>Номер</th><th>Заглавие</th><th>Автор</th><th>Издателство</th><th>Година</th></tr>";
        while ($row = mysqli_fetch_array($result)) {
            echo "<tr><td>" . $row['id'] . "</td><td>" . $row['title'] . "</td><td>" . $row['author'] . "</td><td>". $row['publisher'] . "</td><td>" . $row['year'] . "</td></tr>";
        }
        echo "</table>";
        ?>
       <br> <a href="delete1.php">Изтриване</a><br>
       <a href="index.php">Назад</a> <br>

    </body>
</html>
