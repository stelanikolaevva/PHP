<?php

shuffle($names);
foreach ($names as $val) {
    $rand_key = array_rand($occasion);
    $rand_key2 = array_rand($ps);
    echo "<hr>Уважаеми (а), ", $val, "<br>", $occasion[$rand_key], "<br>", $ps[$rand_key2], "<br>С уважение, Деян Иванов!<br>";
}
?>
