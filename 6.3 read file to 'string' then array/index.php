<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Lab6-3</title>
    </head>
    <body>
        <?php
        $filename = "array.txt";
        $fp = fopen($filename, "r+") or die("<br> Can't open file!");
        if ($fp) {
            $s = "10, 35, 30, 44, 55, 14, 73";
            fwrite($fp, $s);
        }
        fclose($fp);
        $content = file_get_contents($filename);
        $arr = explode(',', $content);
        echo "<pre>";
        print_r($arr);
        echo "</pre>";
        include ('functions.php');
        ?>
    </body>
</html>
