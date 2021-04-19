<?php
include 'config.php';
$deleteorh = mysqli_query($dbConn, "DELETE FROM provider WHERE Firm='Орхидея'");
$sql="SELECT `provider`.`Firm` FROM `provider` ";
$deleted = mysqli_query($dbConn, $sql);
if (!$deleted) {
    printf("Error: %s\n", mysqli_error($dbConn));
    exit();
}
echo "<ol>";
while ($row = mysqli_fetch_array($deleted)) {
    echo "<li>" . $row['Firm'] .  "</li>";
}
echo "</ol>";
?>
<a href="index.php">Назад</a>
