<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <title>Foto</title>
</head>
<body>
    <header class="header">
        <h1 class="header_name">Ваше фото <?= $_GET['img'] ?></h1>
    </header>
    <main class="main_foto">
    <?php 
    include_once "config.php";
    $id = $_GET['id'];
    $getsql = "SELECT count FROM fotos WHERE id=$id";
    $getCount = mysqli_query($connect, $getsql);
    $sqlUpdate = "UPDATE fotos SET count= count + 1 WHERE id=$id";
    mysqli_query($connect, $sqlUpdate);
    

    if($data = mysqli_fetch_assoc($getCount)){?>
        <p>Это фото смотрели <?= $data['count'] ?></p><br>    
<?php
    }
 ?>   
    <a style="color: red" class="end" href="<?= $_SERVER[
            'HTTP_REFERER'
        ] ?>">Вернуться назад</a><br><br>


<a href="server.php?id=<?= $_GET['id']?>&action=delete"><button>Удалить фото</button></a><br><br>
<h3>Нажми на картинку, чтобы увеличить</h3>
        <img class="foto" src="img/<?= $_GET[
            'img'
        ] ?>" alt="foto" style="width:500px;" onclick="this.style.width='1250px'" onmouseout="this.style.width='500px'" ><br><br>
    </main>
    <footer>

    </footer>
</body>
</html>