<?php
include_once '../config/bd.php';
include_once '../models/server_admin.php';
$userId = (int) trim(strip_tags($_GET['userId']));
$good = addPeopleQuestion($connect);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/style_top.css">
    <link rel="stylesheet" href="../style/style_products.css">
    <title>Document</title>
</head>
<body>
<?php include "../templates/menu_header_admin.php" ?>
    <main>
        <div style="text-align: center; width: 70%; margin: 0 auto">
            <?php while ($data = mysqli_fetch_assoc($good)) { ?>
                <p><strong>От кого:</strong> <?= $data['name_people'] ?></p>
                <p><strong>Адрес Email:</strong> <?= $data['mail_people'] ?></p>
                <p><strong>Вопрос:</strong> <?= $data['question'] ?></p>
                <hr>
                <?php } ?>  
        </div>
    </main> 
</body>
</html>