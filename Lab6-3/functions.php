<?php

$mult = 1;
$sum = 0;
foreach ($arr as $key => $value) {
    if ($value % 5 == 0) {
        $sum = $sum + $value;
        $mult = $mult * $value;
    }
}
echo "Сумата: $sum<br>Произведението: $mult<br>";
$br = count($arr);
echo "Елементите по-големи от съседите си: ";
if ($arr[0] > $arr[1]) {
    echo $arr[0] . " ";
}
for ($i = 1; $i < $br - 1; $i++) {
    if ($arr[$i] >= $arr[$i - 1] && $arr[$i] >= $arr[$i + 1]) {
        echo $arr[$i] . " ";
    }
}
if ($arr[$br - 1] > $arr[$br - 2]) {
    echo $arr[$br - 1];
}
?>

