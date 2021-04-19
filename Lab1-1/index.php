<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Задача 1</title>
    </head>
    <body>
        <?php
        $x=8;
        echo "x=".$x."<br>";
        $x+=2;
        echo "Add 2: x=".$x."<br>";
        $x-=4;
        echo "Substract 4: ".$x."<br>";
        $x*=5;
        echo "Multiply by 5: ".$x."<br>";
        $x/=3;
        echo "Divide by 3: ".$x."<br>";
        echo "Increment value by one: ".++$x."<br>";
        echo "Decrement value by one: ".--$x."<br>";
        
        $functions = get_defined_functions();
sort($functions['internal']);
sort($functions['user']);
print_r($functions);
        ?>
    </body>
</html>
