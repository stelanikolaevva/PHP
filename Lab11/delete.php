<?php
include "config.php";
$sql = "SELECT `provider`.`Firm`, `provider`.`Bulstat`"
        . " FROM `provider` where firm='Орхидея'";
$selectprov = mysqli_query($dbConn, $sql);
echo "<table border=2px><tr><th>Доставчик</th><th>Булстат</th></tr>";
while ($row = mysqli_fetch_array($selectprov)) {
    echo "<tr><td>" . $row['Firm'] . "</td><td>" . $row['Bulstat'] . "</td></tr>";
}
echo "</table>";
?>
<br> <a href="delete_provider.php">Изтриване</a><br>

