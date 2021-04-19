<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Lab2-5</title>
    </head>
    <body>
        <p>
        <form name="form 1" method="post" action="">
            Enter the number: <br>
            <input type="text" name="number"> <br>
            Enter the digit: <br>
            <input type ="text" name="digit"><br>
            <input type="submit" name="submit" value="GO">
        </form>
    </p>
    <?php
    $count = 0;
    if (isset($_POST["submit"])) {
        $count = 0;
        $number = $_POST["number"];
        $digit = $_POST["digit"];
        while ($number != 0) {
            if ($number % 10 == $digit) {
                $count++;
            }
            $number = $number / 10;
        }
        if ($count != 0) {
            echo"The number contains $count times digit $digit";
        } else {
            echo "The number does not containt the digit $digit";
        }
    }
    ?>
</body>
</html>
