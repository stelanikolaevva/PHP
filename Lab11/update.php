<?php
include "config.php";
$sql="SELECT `provider`.`Firm`, `provider`.`Bulstat`, `provider`.`Name`"
        . " FROM `provider` WHERE `provider`.`Firm` = 'Лазур'";
$selectname = mysqli_query($dbConn, $sql);
echo "<table border=2px><tr><th>Доставчик</th><th>Булстат</th><th>Лице за контакт</th></tr>";
while ($row = mysqli_fetch_array($selectname)) {
    echo "<tr><td>" . $row['Firm'] . "</td><td>" . $row['Bulstat'] . "</td><td>" . $row['Name'] . "</td></tr>";
}
echo "</table>";
echo '<a href="update_provider.php">Напред</a>';
?>
