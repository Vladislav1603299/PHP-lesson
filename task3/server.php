<?php
include_once 'config.php';

$path = "img/{$_FILES['foto']['name']}";
$action = $_GET['action'];
$id = $_GET['id'];

if (move_uploaded_file($_FILES['foto']['tmp_name'], $path)) {
    $sql = "insert into `fotos` (`name_foto`, `size`, `count`) values ('{$_FILES['foto']['name']}', 700, 0)";
    if (mysqli_query($connect, $sql)) {
        echo "{$_FILES['foto']['name']} успешно загружен!";
        header('Location:gallery.php');
    }
}

if ($action == 'delete') {
    $sqldel = "DELETE FROM fotos WHERE id=$id";
    if (mysqli_query($connect, $sqldel)) {
        echo 'Фото успешно удалено!';
        header('Location:gallery.php');
    }
}

$name = $_POST['fio'];
$feedback = $_POST['feedback'];

$addFeedback = "insert into `feedback` (`name`, `feedback`) values ('$name', '$feedback')";

if ($name == '' || $feedback == '') {
    header('Location:feedback.php?orr=2');
} else {
    $addFeedback = "insert into `feedback` (`name`, `feedback`) values ('$name', '$feedback')";
    $res = mysqli_query($connect, $addFeedback);
    if ($res) {
        header('Location:feedback.php');
    }
}

?>
