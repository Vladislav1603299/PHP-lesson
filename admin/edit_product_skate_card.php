<?php
include_once 'server/server_admin.php';
include_once '../server_website/bd.php';
$userId = (int) trim(strip_tags($_GET['userId']));
$good = addProductSkateEdit($connect);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../style/style_top.css">
    <title>Document</title>
</head>
<body>
<header class="header">
<div class="header_top"></div>
    <header class="header">
        <div class="header_logo_links">
            <a href="admin.php?userId=<?= $userId ?>"><img class="header_logo_top" src="../img/Rectangle.png" alt="logo"></a>
            <div class="header_links">
            <a style="text-decoration: none;" href="product_skates_admin.php?userId=<?= $userId ?>"><p style="margin: 0;" class="header_link">Electric Skateboards</p></a>
            <a style="text-decoration: none;" href="product_scooters_admin.php?userId=<?= $userId ?>"><p style="text-decoration: none;" class="header_link">Electric Scooters</p></a>
            <a style="text-decoration: none;" href="product_accessories_admin.php?userId=<?= $userId ?>"><p style="text-decoration: none;" class="header_link">Accessories</p></a>
            <a style="text-decoration: none;" href="question_people_for_admin.php?userId=<?= $userId ?>"><p style="text-decoration: none;" class="header_link">Contact_questions</p></a>
            <a style="text-decoration: none;" href="profile_admin.php?userId=<?= $userId ?>"><p style="text-decoration: none;" class="header_link">Profile</p></a>
            <a style="text-decoration: none;" href="bascet_users_admin.php?userId=<?= $userId ?>"><p style="text-decoration: none;" class="header_link">Bascet_Users</p></a>
            <a style="text-decoration: none;" href="users_admin.php?userId=<?= $userId ?>"><p style="text-decoration: none;" class="header_link">Users</p></a>
            <a style="text-decoration: none;" href="../entrance.php"><p style="margin: 0; margin-left: 50px; margin-right:20px" class="header_link">Exit</p></a>
        </div>
    </header>
    <hr>
    
    <main>
        <div style="text-align: center;">
        <?php while ($data = mysqli_fetch_assoc($good)) { ?>
            <form action="server/core_server_admin.php?userId=<?= $userId ?>&id=<?= $data[
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
                    <input style="width: 150px;" onclick="alert('Товар успешно обновлен!!!')" class="btn btn-primary" type="submit"  name="submitSkate" value="Save">
                </div>
            </form>
            <div style="text-align: center; margin-bottom: 30px;" >
                <a href="server/core_server_admin.php?userId=<?= $userId ?>&id=<?= $data[
    'id'
] ?>&action=deleteSkate"><input style="background-color: red; width: 150px;" class="btn btn-primary" type="submit"  value="Delete_product"></a>
            </div>
            <?php } ?>
        </div>
    </main>
    
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>