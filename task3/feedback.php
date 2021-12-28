<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/styles.css">
    <title>Document</title>
</head>
<body>
    <header class="header">
        <h1 class="header_name">Отзывы</h1>
        <a style="color: white; text-decoration: none; margin-right: 15px;" href="gallery.php">Назад</a>
    </header>
    <main class="main">
        <div>
            <?php
            include_once 'config.php';
            $sql = 'SELECT * FROM feedback';
            $res = mysqli_query($connect, $sql);
            while ($data = mysqli_fetch_assoc($res)) { ?>
                <div class="feedback">
                    <h3><?= $data['name'] ?></h3>
                    <p class="user_feedback"><?= $data['feedback'] ?></p>
                </div>
            <?php }
            ?>
        </div>
        <hr style="border: 1px solid black;">
        <form class="feedback_form" action="server.php" method="post">
            <div>
                <p>Ваше имя</p>
                <input type="text" name="fio">
            </div>
            <div>
                <p>Ваш отзыв</p>
                <input style="margin-left: 15px;" type="text" name="feedback"><br>
            </div>
            <input style="margin-left: 15px; height: 23px;" type="submit" value="Отправить">
            <?php if ($_GET['orr'] == 2) {
                echo 'Введите имя и отзыв!!!';
            } ?>
        </form>
    </main>
</body>
</html>