<?php
include_once '../models/server_admin.php';
include_once '../config/bd.php';
$userId = (int) trim(strip_tags($_GET['userId']));
$good = addProductScooterEdit($connect);
?>

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
        <?php while ($data = mysqli_fetch_assoc($good)) { ?>
            <form action="../controllers/core_server_admin.php?userId=<?= $userId ?>&id=<?= $data[
    'id'
] ?>" method="post"  enctype="multipart/form-data">  
                <p><strong>Редактировать товар:</strong></p>
                <p>наименование: <br><input style="width: 300px;" type="text" name="name" maxlength="100" value="<?= $data[
                    'name_product'
                ] ?>"></p>
                <p>описание: <br><textarea style="width: 500px;" name="description" rows="10"><?= $data[
                    'description'
                ] ?></textarea></p>
                <p>цена: <br><input type="number" name="price" maxlength="20" value="<?= $data[
                    'price'
                ] ?>" ></p>
                <p>количество просмотров товара: <br><input type="number" name="count" maxlength="20" value="<?= $data[
                    'count'
                ] ?>" ></p>

                <p style="text-align: center;">фото товара:</p>
                <div style="display: flex; text-align: center; justify-content: center;">     
                    <div>
                        <img width="130px" src="<?= $data[
                            'way_image1'
                        ] ?>" alt="photo">
                        <p>ссылка на фото-1 товара: <br><input style="width: 300px;" type="text" name="src[]" value="<?= $data[
                            'way_image1'
                        ] ?>"></p>
                    </div>
                    <div style="margin-left: 60px;">
                        <img width="130px" src="<?= $data[
                            'way_image2'
                        ] ?>" alt="photo">
                        <p>ссылка на фото-2 товара: <br><input style="width: 300px;" type="text" name="src[]" value="<?= $data[
                            'way_image2'
                        ] ?>"></p>
                    </div>
                    <div style="margin-left: 60px;">
                        <img width="130px" src="<?= $data[
                            'way_image3'
                        ] ?>" alt="photo">
                        <p >ссылка на фото-3 товара: <br><input style="width: 300px;" type="text" name="src[]" value="<?= $data[
                            'way_image3'
                        ] ?>"></p>
                    </div>
                </div>
                <div style="text-align: center; margin-bottom: 30px;" >
                    <input style="width: 150px;" onclick="alert('Товар успешно обновлен!!!')" class="btn btn-primary" type="submit"  name="submitScooter" value="Save">
                </div>
            </form>
            <div style="text-align: center; margin-bottom: 30px;" >
                <a href="../controllers/core_server_admin.php?userId=<?= $userId ?>&id=<?= $data[
    'id'
] ?>&action=deleteScooter"><input style="background-color: red; width: 150px;" class="btn btn-primary" type="submit"  value="Delete_product"></a>
            </div>
            <?php } ?>
        </div>
    </main>
</body>
</html>