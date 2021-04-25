<?php

include("functions.php");
if ($exist) {
    $p = ($a + $b + $c) / 2;
    $S = sqrt($p * ($p - $a) * ($p - $b) * ($p - $c));
    echo "Лицето на триъгълника е " . round($S, 2);
}
?>

