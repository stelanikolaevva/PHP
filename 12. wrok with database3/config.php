<?php

$host = 'localhost';
$dbUser = 'root';
$dbPass = '';
$conn = mysqli_connect($host, $dbUser, $dbPass);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
if (!mysqli_select_db($conn, 'hotel')) {
    die('Не може да се селектира базата от данни:' . mysqli_error($conn));
}
?>