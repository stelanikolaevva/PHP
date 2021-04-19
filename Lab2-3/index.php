<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Lab2-3</title>
    </head>
    <body>
        <p> Enter the number of month: <br>
        <form name="form" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <input type="text" name="month"><br>
            <input type="submit" name="GO" value="GO">
        </form>
        <?php
        if (isset($_POST['GO'])) {
            $m = $_POST['month'];
            switch ($m) {
                case 1: echo "Winter!";
                    break;
                case 2: echo "Winter!";
                    break;
                case 3: echo "Spring!";
                    break;
                case 4: echo "Spirng!";
                    break;
                case 5: echo "Spring!";
                    break;
                case 6: echo "Summer!";
                    break;
                case 7: echo "Summer!";
                    break;
                case 8: echo "Summer!";
                    break;
                case 9: echo "Fall!";
                    break;
                case 10: echo "Fall!";
                    break;
                case 11: echo "Fall!";
                    break;
                case 12: echo "Winter!";
                    break;
                default: echo "Not a valid month!";
            }
        }
        ?>
    </body>
</html>
