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
        if (isset($_POST["submit"])) {
            $id = $_POST['id'];
            $title = $_POST['title'];
            $author = $_POST['author'];
            $publisher = $_POST['publisher'];
            $year = $_POST['year'];
            if (!empty($id) && !empty($title) && !empty($author) && !empty($publisher) && !empty($year)) {
                $sql3 = "INSERT INTO books (id, title, author, publisher, year) VALUES ($id, '$title','$author', '$publisher', $year)";
                $result1 = mysqli_query($dbConn, $sql3);
               
                if (!$result1) { die('Грешка!!!');
                }
                echo "Добавихте един запис.";
                echo '<a href="inp_form.php">Отново</a><br>';
            } else
                echo "Не сте въвели всички данни!!!";
            
        }
        ?>
        <a href="index.php">Назад</a> <br>
    </body>
</html>
