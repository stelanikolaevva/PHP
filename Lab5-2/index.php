<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Lab5-2</title>
    </head>
    <body>
        <p> Въведете положителни стойности:
        <form name="form" method="post" action="#">
            a:<input type="text" name="a"><br>
            b:<input type="text" name="b"><br>
            c:<input type="text" name="c"><br>
            <input type="submit" name="subm" value="Провери">
        </form>
    </p>
    <?php
    if (isset($_POST['subm'])) {
        require 'check.php';
    }
    ?>
</body>
</html>
