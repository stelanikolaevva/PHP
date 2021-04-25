<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Lab8-3</title>
    </head>
    <body>
        <form name="form" method="post" action="#">
            Create article's description: <input type="submit" name="article" value="Create Article">
            <br><br>
            Create Person's description: <input type="submit" name="person" value="Create Person">
        </form>

        <?php
        if (isset($_POST['article'])) {
        header("Location:article.php");
        }
        if (isset($_POST['person'])) {
        header("Location:person.php");
        }
        ?>
    </body>
</html>
