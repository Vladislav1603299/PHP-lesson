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
    <title>electric scooters</title>
</head>
<body>
<?php include_once "../templates/menu_header.php"; ?>
    <main>
        <h1 class="products_name">ELECTRIC SCOOTERS</h1>
        <div style="flex-wrap:wrap; width:80%; margin: 0 auto" class="products">
            <?php
            include_once '../config/bd.php';
            $good = addProductsScooter($connect);
            while ($data = mysqli_fetch_assoc($good)) { ?>
            <a style="margin-top: 10px;" class="card_block" href="product_scooter_card.php?userId=<?= $userId ?>&id=<?= $data[
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
        <div class="main_line"></div>
    <div class="main_footer"></div>
    </main>
    <?php include_once "../templates/footer.php"; ?>
</body>
</html>