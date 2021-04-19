<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Lab6-1</title>
    </head>
    <body>
        <?php
        $filename = "data.txt";
        $fp = fopen($filename, "w") or exit("<br>can’t open the file for reading");

        $s = "Дисциплина Web приложения се изучава през втория семестър на втори курс. Тази дисциплина се изучава от студенти, които са специалност СИТ! ";
        fwrite($fp, $s);
        fclose($fp);

        $ss = "Студентите редовно си пишат домашните.";
        $fp = fopen($filename, "a") or exit("<br>can’t open the file for reading");
        fwrite($fp, $ss);

        $fp = fopen($filename, "r")or exit("<br>can’t open the file for reading");
        $contents = fread($fp, filesize($filename));
        print_r($contents);
        echo "<br>Размерът на файла е " . filesize($filename);

        fclose($fp);
        ?>
    </body>
</html>
