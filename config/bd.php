<?php
session_start();
require_once 'config.php';

($connect = mysqli_connect(
    MYSQL_SERVER,
    MYSQL_USER,
    MYSQL_PASSWORD,
    MYSQL_BD
)) or die('Error: ' . mysqli_error($connect));
if (!mysqli_set_charset($connect, 'utf8')) {
    printf('Error: ' . mysqli_error($connect));
}
?>
