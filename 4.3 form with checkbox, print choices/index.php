<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Lab4-3</title>
    </head>
    <body>
        <p>
            Please enter your information: <br><br>
        <form name="form" method="post" action="#">
            City:<input type="text" name="city"/> Month:<input type="text" name="month"/> Year:<input type="text" name="year"/><br><br>
            Please choose the kind of weather you experienced from the list bellow. <br>
            Choose all that apply!  <br><br>
            <input type="checkbox" name="weather[]" value="sunshine" />Sunshine<br>
            <input type="checkbox" name="weather[]" value="clouds" />Clouds<br>
            <input type="checkbox" name="weather[]" value="rain" />Rain<br />
            <input type="checkbox" name="weather[]" value="hail" />Hail<br />
            <input type="checkbox" name="weather[]" value="sleet" />Sleet<br />
            <input type="checkbox" name="weather[]" value="snow" />Snow<br />
            <input type="checkbox" name="weather[]" value="wind" />Wind<br />
            <input type="checkbox" name="weather[]" value="cold" />Cold<br />
            <input type="checkbox" name="weather[]" value="heat" />Heat<br />
            <input type="submit" name="subm" value="Go">
            </p>
            <?php
            if (isset($_POST['subm'])) {
                if (isset($_POST['city']) && isset($_POST['month']) && isset($_POST['year'])) {
                    $city = $_POST["city"];
                    $month = $_POST["month"];
                    $year = $_POST["year"];
                    if (isset($_POST['weather'])) {
                        $weather = $_POST['weather'];

                        echo "In " . $city . " in the month of " . $month . " " . $year . " ,you observed the following weather:
                    <ul>";
                        foreach ($weather as $value) {
                            echo "<li>" . $value . "</li>";
                        }
                        echo "</ul>";
                    }
                }
            }
            ?>
            </body>
            </html>
