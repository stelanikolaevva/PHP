<?php
include 'config.php';
$table_name = "City";
$backup_file = "C:/xampp/htdocs/Lab11/cityinfo1.sql";
$sql = "SELECT * FROM $table_name INTO OUTFILE '$backup_file'";
$result = mysqli_query($dbConn,$sql);

$table_name = "Provider";
$backup_file = "C:/xampp/htdocs/Lab11/providerinfo1.sql";
$sql = "SELECT * FROM $table_name INTO OUTFILE '$backup_file'";
$result = mysqli_query($dbConn,$sql);
if(!$result )
{
 die('Грешка: ' . mysqli_error($dbConn));
}
echo "Информацията е запазена успешно, може да я намерите в C:/xampp/htdocs/Lab11/.";
?>
