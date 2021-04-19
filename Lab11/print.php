<?php
include "config.php";
echo "Данните, въведени досега за Доставчик:<br>";
$prov = mysqli_query($dbConn, "SELECT * FROM Provider");
                echo "<table border=2px><tr><th>Доставчик</th><th>Булстат</th><th>Адрес</th><th>Телефон</th><th>Година Регистрация</th><th>Лице за контакт</th></tr>";
                while ($row = mysqli_fetch_array($prov)) {
                    echo "<tr><td>" . $row['Firm'] . "</td><td>" . $row['Bulstat'] . "</td><td>" . $row['CityID'] . "</td><td>" . $row['PhoneNumber'] . "</td><td>" . $row['YearRegistered'] . "</td><td>" . $row['Name'] . "</td></tr>";
                }
                echo "</table>";
echo "Данните, въведени досега за Градове:<br>";                
$cit = mysqli_query($dbConn, "SELECT * FROM City");
        echo "<table border=2px><tr><th>ID</th><th>City</th></tr>";
        while ($row = mysqli_fetch_array($cit)) {
            echo "<tr><td>" . $row['CityID'] . "</td><td>" . $row['Name'] ."</td></tr>";
        }
        echo "</table>";
echo '<a href="index.php">Назад</a><br>';
?>
