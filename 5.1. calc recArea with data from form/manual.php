<?php

if (isset($_POST['lenght']) && isset($_POST['width'])) {
    $l = $_POST["lenght"];
    $w = $_POST["width"];
    echo "Лице на правоъгълник с избрани числа <br> Правоъгълник с дължина ", $l, " и ширина ", $w, " има лице ", recArea($l, $w);
}
?>