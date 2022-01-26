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
    <link rel="stylesheet" href="../img_product_el_skate/dist/css/lightbox.css">
    <link rel="stylesheet" href="../style/style_top.css">
    <link rel="stylesheet" href="../style/style_products.css">
    <title>product</title>
</head>
<body>
<?php include_once "../templates/menu_header.php"; ?>
    <main>
    <div>
        <?php
        include_once '../config/bd.php';
        $good = addProductScooter($connect);
        while ($data = mysqli_fetch_assoc($good)) { ?>
        <form action="../controllers/core_website.php?userId=<?= $userId ?>&id=<?= $data[
    'id'
] ?>&name_product=<?= $data['name_product'] ?>&price=<?= $data[
    'price'
] ?>&img=<?= $data[
    'way_image1'
] ?>" method="post"  enctype="multipart/form-data" >
        <div class="product_card">
            <div style="width: 600px;" id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                
                <div style="height: 600px;  width: 600px" class="carousel-inner">
                    <div width="500px" class="carousel-item active">
                    <a href="<?= $data[
                        'way_image1'
                    ] ?> " data-lightbox="test"><img width="500px" src="<?= $data[
     'way_image1'
 ] ?>" class="d-block w-100" alt="foto"></a>
                    </div>
                    <div width="500px" class="carousel-item">
                    <a href="<?= $data[
                        'way_image2'
                    ] ?>" data-lightbox="test"><img src="<?= $data[
    'way_image2'
] ?>" class="d-block w-100" alt="foto"></a>
                    </div>
                    <div width="500px" class="carousel-item">
                    <a href="<?= $data[
                        'way_image3'
                    ] ?>" data-lightbox="test"><img src="<?= $data[
    'way_image3'
] ?>" class="d-block w-100" alt="foto"></a>
                    </div>
                </div>
                
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                    <span style="background-color: black;" class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                    <span style="background-color: black;" class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
                <div class="product_card_text_price">
                    <h3><?= $data['name_product'] ?></h3>
                    <p class="product_card_description"><?= $data[
                        'description'
                    ] ?></p>
                    <p class="product_card_price"><?= $data['price'] ?>$</p>
                    <?php
                    if($_GET['userId'] == 0){?>
                        <p style="text-align: center">Register or log in to add products to the cart!!!</p>
                        <div style="text-align: center">
                            <a href="entrance.php">Entrance</a>
                        </div>
                    <?php
                    } else {?>
                    <p>Quantity</p>
                    <input class="input_number" type="number" name="count_product" min="1" value="1"><br><br>
                    <div class="input_by">
                        <input class="btn btn-primary" type="submit" name="addToBascetScooter" value="Add to bascet">
                    </div>
                    <?php
                    }
                    ?>
                </div>
            </div>
        </form>
        <?php }
        ?>
    </div>
    <div class="main_line"></div>
    <div class="main_footer"></div>
    </main>
    <?php include_once "../templates/footer.php"; ?>
<script src="../img_product_el_skate/dist/js/lightbox-plus-jquery.js"></script>
</body>
</html>