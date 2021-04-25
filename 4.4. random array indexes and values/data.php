<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Lab4-4</title>
    </head>
    <body>
        <?php
        $names = array("Иван Иванов", "Петър Петров", "Симеон Семов", "Стела Николаева", "Моника Владимирова", "Владо Попов");
        $occasion = array("Имаме удоволствието да ви поканим на открито изложение ",
            "Имаме удоволствието да ви поканим на бал на випускниците. ",
            "Имаме удоволствието да ви поканим на ден на отворените врати. ");
        $ps = array("Не забравяйте да донесете подарък :-) ",
            "Бъдете 10 минути преди откриването! ",
            "Моля, потвърдете Вашето участие по телефона!");
        include("letters.php");
        ?>
    </body>
</html>
