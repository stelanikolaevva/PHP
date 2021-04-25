<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Lab3-4</title>
    </head>
    <body>
        <p>
        <form method="post" action="<?php $_PHP_SELF ?>">
            Въведете число: <input type="text" name="chislo"><br>
            <input type="submit" name="subm" value="Провери!">
        </form>
    </p>
    <?php
    if (isset($_POST['subm'])) {

        $fl = 0;
        for ($i = 2; $i <= ($_POST['chislo'] / 2 - 1); $i++) {
            if ($_POST['chislo'] % $i == 0) {
                $fl = 1;
                break;
            }
        }
        if ($fl == 0) {
            echo "Числото ", $_POST['chislo'], " е просто";
        } else {
            echo "Числото ", $_POST['chislo'], " не е просто";
        }
    }
    ?>
</body>
</html>
