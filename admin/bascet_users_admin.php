<?php
$userId = (int) trim(strip_tags($_GET['userId']));
include_once '../models/server_admin.php';
include_once '../config/bd.php';
$good = getGoods($connect);
$goodBascetSum = sumGoodsBascet($connect);
$getGoodsOrderUsers = seeOrderUsers($connect);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/style_top.css">
    <link rel="stylesheet" href="../style/style_products.css">
    <title>Bascet</title>
</head>
<body>
<?php include "../templates/menu_header_admin.php" ?>
    <main>
        <h1 class="products_name">ORDERS_USERS</h1>
        <?php while($data = mysqli_fetch_assoc($getGoodsOrderUsers)){
            $id = $data['good_id'];
            $name_product = $data['name_good'];
            $clientId = $data['user_id'];
            $sumGoodUser = sumGood($connect, $clientId, $id, $name_product);?>
            <div>
                <div style="border: 1px solid black; width: 450px; 
    min-height: 300px; display:flex; justify-content:center; align-items:center; margin:0 auto; margin-top:20px">
                    <div><img width="150px" src="<?= $data[
                        'image_good'
                    ] ?> " alt="foto"></div>
                    
                    <div style="margin-left: 20px; text-align:center">
                        <strong style="margin: 0; font-size: 20px; text-decoration: underline;"><?= $data[
                            'name_good'
                        ] ?></strong>
                        <p style="color: red; margin: 0"><strong style="color: black;">Price for 1 item: </strong><?= $data[
                            'price_good'
                        ] ?> $</p>
                        <p style="color: red; margin: 0;"><strong style="color: black;">Quantity: </strong><?= $data[
                            'count_good'
                        ] ?> things</p>
                        <?php while($sumGood = mysqli_fetch_assoc($sumGoodUser)){?>
                            <p style="color: red;"><strong style="color: black;">The cost of everything: </strong> <?= $sumGood['sum_good'] ?> $</p>
                        <?php
                            }
                        ?>
                        <div style="margin-top: 10px; border: 1px solid black">
                        <h5 style="text-decoration: underline;">Contact info</h5>
                            <p style="color: red; font-size: 20px;"><strong style="color: black;">Id client: </strong><?= $data['user_id'] ?></p>
                            <p><strong>Name client: </strong><?= $data['name'] ?></p>
                            <p><strong>Surname client: </strong><?= $data['surname'] ?></p>
                            <p><strong>Address client: </strong><?= $data['address'] ?></p>
                            <p><strong>Email client: </strong><?= $data['email'] ?></p>
                            <p><strong>Number client: </strong><?= $data['phone'] ?></p>
                        </div>
                    </div>   
                </div>
            </div>
        <?php
            }
        ?>
    </main>
</body>
</html>