<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Lab2-4</title>
    </head>
    <body>
        <?php
        $month = date('F', time());
        if ($month == 'August') {
            echo "Август е, наистина е горещо!<br>";
        } else {
            echo "Не е Август, така че поне не е горещо!<br>";
        }
        ?>
    </body>
</html>
