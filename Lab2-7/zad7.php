<?php

$str = "Hello," . $_POST["first_name"] . " " . $_POST["last_name"] . "!<br>";
$str .= "Your choise is " . $_POST["kurs"];
echo $str;
?>