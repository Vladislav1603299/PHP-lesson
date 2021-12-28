<?php
$num1 = $_GET['num1'];
$num2 = $_GET['num2'];

if($_GET['sum']){
    $result = $num1 + $num2;
}elseif($_GET['diff']){
    $result = $num1 - $num2;
}elseif($_GET['mult']){
    $result = $num1 * $num2;
}elseif($_GET['div']){
    $result = $num1 / $num2;
}

$res = $result;
header("Location:calk.php?res=$res");

?>