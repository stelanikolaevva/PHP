<?php
include 'config.php';
$table_name = "city";
$backup_file = "C:/xampp/htdocs/Lab11/cityinfo1.sql";
$sql = "LOAD DATA INFILE '$backup_file' INTO TABLE $table_name";
$result = mysqli_query($dbConn, $sql);

$table_name = "Provider";
$backup_file = "C:/xampp/htdocs/Lab11/providerinfo1.sql";
$sql = "LOAD DATA INFILE '$backup_file' INTO TABLE $table_name";
$result = mysqli_query($dbConn, $sql);
if(!$result )
{
 die('Грешка: ' . mysqli_error($dbConn));
}
echo "Качването успешно.";
?>