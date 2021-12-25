<?php
include_once "config.php";

$path = "img/{$_FILES['foto']['name']}";
$action = $_GET['action'];
$id = $_GET['id'];

if (move_uploaded_file($_FILES['foto']['tmp_name'], $path)) {
    $sql = "insert into `fotos` (`name_foto`, `size`, `count`) values ('{$_FILES['foto']['name']}', 700, 0)";
    if(mysqli_query($connect, $sql)){
        echo "{$_FILES['foto']['name']} успешно загружен!";
        header("Location:gallery.php");
    };
}


if($action == "delete"){
    $sqldel = "DELETE FROM fotos WHERE id=$id";
    if(mysqli_query($connect, $sqldel)){
        echo "Фото успешно удалено!";
        header("Location:gallery.php");
    }
}




?>
