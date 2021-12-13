<?php
// Задание 1
function numbers($x, $y)
{
    if ($x >= 0 && $y >= 0) {
        echo $y - $x;
        echo "<br><br>";
    } elseif ($x < 0 && $y < 0) {
        echo $y * $x;
        echo "<br><br>";
    } elseif (($x > 0 && $y < 0) || ($x < 0 && $y > 0)) {
        echo $y + $x;
        echo "<br><br>";
    }
}

numbers(5, 8);

//Задание 2

function numbersNum($x)
{
    switch ($x) {
        case $x < 0:
            break;
        case $x > 15:
            break;
        case $x >= 0 || $x <= 15:
            echo "$x <br>";
            return numbersNum($x + 1);
    }
}

numbersNum(7);

// Задание 3

function sum($a, $b)
{
    return $a + $b;
}

function difference($a, $b)
{
    return $a - $b;
}

function composition($a, $b)
{
    return $a * $b;
}

function division($a, $b)
{
    return $a / $b;
}
$sum = sum(5, 8);
$difference = difference(13, 6);
$composition = composition(4, 9);
$division = division(9, 3);
echo " <br> $sum <br>";
echo "$difference <br>";
echo "$composition <br>";
echo "$division <br><br>";

//Задание 4

function mathOperation($arg1, $arg2, $operation)
{
    switch ($operation) {
        case 'sum':
            return $arg1 + $arg2;
        case 'difference':
            return $arg1 - $arg2;
        case 'composition':
            return $arg1 * $arg2;
        case 'division':
            return $arg1 / $arg2;
    }
}

$num = mathOperation(9, 3, 'division');
echo "$num <br><br>";

// Задание 5

function power($val, $pow)
{
    if ($pow === 0) {
        return 1;
    } elseif ($pow > 0) {
        return $val * power($val, $pow - 1);
    }
}

$degree = power(4, 5);
echo "$degree <br><br>";


// Задание 6

function times(){
    $h = date("H");
    $m = date("i");
    if ($h==1 || $h==21) {
    $hours = " час";}
    elseif (($h>=2 && $h<=4) || ($h>=22 && $h<=24)) {
    $hours = " часа";}
    else {$hours = " часов";}
    if (($m<20) || ($m>10))
    {$minutes = " минут.";}
    elseif (($m % 10) === 1) {
    $minutes = " минута.";}
    elseif ((($m % 10)>=2) && (($m % 10)<=4)) {
    $minutes = " минуты.";}
    else {
    $minutes = " минут.";}
    echo $h . $hours . " " . $m . $minutes;
}


times();

?>

