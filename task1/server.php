<?php


    
$num1 = $_GET['num1'];
$num2 = $_GET['num2'];

switch ($_GET['operation']) {
    case '+':
        $result = $num1 + $num2;
        break;
    case '-':
        $result = $num1 - $num2;
        break;
    case '*':
        $result = $num1 * $num2;
        break;
    case '/':
        $result = $num1 / $num2;
        break;
    default:
        return 'Операция не поддерживается';
};

$res = $result;
header("Location:calk.php?res=$res");
    
?>