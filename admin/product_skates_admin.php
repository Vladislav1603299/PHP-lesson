<?php
include_once '../models/server_website.php';
$userId = (int) trim(strip_tags($_GET['userId']));
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
        <div style="text-align: center; margin-bottom: 30px;" >
            <a href="add_skates.php?userId=<?= $userId ?>"><input class="btn btn-primary" type="submit" value="Add product"></a>
        </div>
        <h1 class="products_name">ELECTRIC SKATEBOARDS</h1>
        <div style="flex-wrap:wrap; width:80%; margin: 0 auto" class="products">
            <?php
            include_once '../config/bd.php';
            $good = addProductsSkate($connect);
            while ($data = mysqli_fetch_assoc($good)) { ?>
            <a style="margin-top: 10px;" class="card_block" href="edit_product_skate_card.php?userId=<?= $userId ?>&id=<?= $data[
    'id'
] ?>"><div class="card">
                <img width="200px" height="300px" class="card_img" src="<?= $data[
                    'way_image1'
                ] ?>" alt="image">
                <h4 class="card_name"><?= $data['name_product'] ?></h4>
            </div></a>

            <?php }
            ?>
        </div>

    </main>
</body>
</html>