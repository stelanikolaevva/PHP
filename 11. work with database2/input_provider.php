<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <pre>
        <form action='#' method="post">
            Фирма:                 <input type="text" name="firm"/> <br>
            Булстат:               <input type="text" name="bulst"/> <br>
            Населено Място:        <select name="city">
                    <?php
                    include "config.php";
                    $result = mysqli_query($dbConn, "SELECT * FROM City");
                    while ($row = mysqli_fetch_array($result)) {
                        echo '<option>' . $row["Name"].'</option>';
                    }
                    ?>
            </select><br>
            Телефон:               <input type="text" name="ph"/> <br>
            Година за регистрация: <input type="text" name="year"/> <br>
            Лице за контакти:      <input type="text" name="contact"/> <br>
            <input type='submit' name='subm' value='Въведи'/>
        </form>
        </pre>
        <?php
        include "config.php";
        if (isset($_POST['subm'])) {
            $firm = $_POST['firm'];
            $bulst = $_POST['bulst'];
            $city = $_POST['city'];
            $ph = $_POST['ph'];
            $year = $_POST['year'];
            $cont = $_POST['contact'];
            if (!empty($firm) && !empty($bulst) && !empty($city) && !empty($ph) && !empty($year) && !empty($cont)) {
                $sql3 = "INSERT INTO `Provider` (`Firm`, `Bulstat`, `CityID`, `PhoneNumber`, `YearRegistered`, `Name`) VALUES (' $firm', '$bulst', '$city ', '$ph', '$year', '$cont')";
                if ($dbConn->query($sql3) === TRUE) {
                    $last_id1 = $dbConn->insert_id;
                    echo "Успесно добавен нов запис с код: " . $last_id1;
                    echo '<a href="index.php">Назад</a><br>';
                } else {
                    echo "Error: " . $sql3 . "<br>" . $dbConn->error;
                }

                $result = mysqli_query($dbConn, "SELECT * FROM Provider");
                echo "<table border=2px><tr><th>Доставчик</th><th>Булстат</th><th>Адрес</th><th>Телефон</th><th>Година Регистрация</th><th>Лице за контакт</th></tr>";
                while ($row = mysqli_fetch_array($result)) {
                    echo "<tr><td>" . $row['Firm'] . "</td><td>" . $row['Bulstat'] . "</td><td>" . $row['CityID'] . "</td><td>" . $row['PhoneNumber'] . "</td><td>" . $row['YearRegistered'] . "</td><td>" . $row['Name'] . "</td></tr>";
                }
                echo "</table>";
            }
        }
        ?>
    </body>
</html>

