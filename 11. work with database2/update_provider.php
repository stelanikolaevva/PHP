<?php
include "config.php";
$sql4 = "UPDATE provider SET Name='Мария Руменова' WHERE firm='Лазур'";
        mysqli_query($dbConn, $sql4);
$sql="SELECT `provider`.`Firm`, `provider`.`Bulstat`, `provider`.`Name`"
        . " FROM `provider`";
        $result = mysqli_query($dbConn, $sql);
        echo "<ol>";
        while ($row = mysqli_fetch_array($result)) {
            echo "<li>" . $row['Firm'] . ", " . $row['Name']. "</li>";
        }
        echo "</ol>";
        ?>
        <a href="index.php">Назад</a>
