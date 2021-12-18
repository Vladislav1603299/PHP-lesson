<?php

$n = 0;
do {
    if ($n == 0) {
        echo "$n - ноль <br>";
    } elseif ($n != 0 && $n % 2 == 0) {
        echo "$n - четное число <br>";
    } else {
        echo "$n - нечетное число <br>";
    }
    $n++;
} while ($n <= 10);
?>
