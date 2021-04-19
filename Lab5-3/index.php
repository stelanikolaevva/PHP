<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Lab5-3</title>
    </head>
    <body>
        <?php
        $f = 'Студентът Иван Иванов има отлична оценка по дисциплина Web приложения.';
        $s = 'Иван Петров има отлична оценка по Web приложения.';
        echo "1.$f<br>2.$s<br>";
        echo "<br>Дължината на първия e " . strlen($f) . ", а на втория " . strlen($s);
        $nac = strpos($f, "Иван Иванов");
        if ($nac) {
            echo "<br><br>Иван Иванов се съдържа в първия низ, като началната позиция е $nac";
        } else {
            echo "<br><br>Иван Иванов не се съдържа в първия низ.";
        }
        echo "<br><br>";
        echo "<pre>";
        $ex = explode(" ", $f);
        print_r($ex);
        echo "<br>";
        $ex = explode(" ", $s);
        print_r($ex);
        echo "</pre>";
        echo "<br><br>";
        $new = str_replace("дисциплина", "предмет", $f);
        echo $new;
        echo "<br>";
        echo "<br>";

        if (strcmp($s, $f) == 0) {
            echo "Съвпадат";
        } else {
            echo "Не съвпадат";
        }
        ?>
    </body>
</html>
