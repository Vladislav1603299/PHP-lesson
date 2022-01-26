<?php
$userId = (int) trim(strip_tags($_GET['userId'])); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/style_top.css">
    <title>Document</title>
</head>
<body>
<?php include "../templates/menu_header_admin.php" ?>
    <main>
        <div style="text-align: center;">
            <form action="../controllers/core_server_admin.php?userId=<?= $userId ?>" method="post"  enctype="multipart/form-data">  
                    <p><strong>Добавить товар:</strong></p>
                    <p>наименование: <br><input style="width: 300px;" type="text" name="name" maxlength="100" value="" required></p>
                    <p>описание: <br><textarea style="width: 500px;" name="description" rows="10" required></textarea></p>
                    <p>цена: <br><input type="number" name="price" maxlength="20" value="" required></p>
                    <p>количество просмотров товара: <br><input type="number" name="count" maxlength="20" value="" required></p>

                    <p style="text-align: center;">фото товара:</p>
                    <div style="display: flex; text-align: center; justify-content: center;">     
                        <div>
                            <p>ссылка на фото-1 товара: <br><input style="width: 300px;" type="text" name="src[]" value="" required></p>
                        </div>
                        <div style="margin-left: 60px;">
                            <p>ссылка на фото-2 товара: <br><input style="width: 300px;" type="text" name="src[]" value="" required></p>
                        </div>
                        <div style="margin-left: 60px;">
                            <p >ссылка на фото-3 товара: <br><input style="width: 300px;" type="text" name="src[]" value=""></p>
                        </div>
                    </div>
                    <div style="text-align: center; margin-bottom: 30px;" >
                        <input style="width: 150px;" class="btn btn-primary" type="submit"  name="addScooter" value="Add">
                    </div>
            </form>
        </div>
    </main>



</body>
</html>