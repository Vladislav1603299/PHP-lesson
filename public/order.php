<?php
$userId = (int) trim(strip_tags($_GET['userId']));
include_once '../models/server_website.php';
include_once '../config/bd.php';
$good = getGoods($connect, $userId);
$goodBascetSum = sumGoodsBascet($connect, $userId);
$userInfo = addProfile($connect);
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
    <?php include_once "../templates/menu_header.php"; ?>
        <main>
    
            <form action="../controllers/core_website.php?userId=<?= $userId ?>&id=<?=$id ?>" method="post"  enctype="multipart/form-data">
        
                <div>
                    <table style="border: 1px solid grey; border-collapse: collapse; text-align:center; margin:0 auto">
                        <tr style="border: 1px solid grey;">
                            <th style="border: 1px solid grey; width:250px">Good_name</th>
                            <th style="border: 1px solid grey; width:250px">Good_price</th>
                            <th style="border: 1px solid grey; width:250px">Good_count</th>
                            <th style="border: 1px solid grey; width:250px">Good_price_all</th>
                            
                        </tr>
                        <?php while($data = mysqli_fetch_assoc($good)){
                            $id = $data['id'];
                            $name_product = $data['name_product'];
                            $goodsum = sumGood($connect, $userId, $id, $name_product);
                        ?>
                        <tr>
                            <th name="name_g" style="border: 1px solid grey;"><?= $data['name_product'] ?></th>
                            <th style="border: 1px solid grey;"><?= $data['price'] ?></th>
                            <th style="border: 1px solid grey;"><?= $data['count'] ?></th>
                            <?php
                                while($datasum = mysqli_fetch_assoc($goodsum)){
                            ?>
                            <th style="border: 1px solid grey;"><?= $datasum['sum_good'] ?> $</th>
                            <?php
                                }
                            ?>
                        </tr>

                        <?php
                            }
                        ?>
                        </table>
                        <table style="border: 1px solid grey; border-collapse: collapse; text-align:center; margin:0 auto">
                            <tr style="border: 1px solid grey;">
                                <th style="border: 1px solid grey; width:750px">Total:</th>
                                <?php  while ($datasumall = mysqli_fetch_assoc($goodBascetSum)){?>
                                <th style="border: 1px solid grey; width:250px"><?= $datasumall['sum_all'] ?> $</th>
                                <?php
                                }
                                ?>
                            </tr>
                        </table>
                        <?php if($_GET['status'] == 'success'){?>
                            <div style="margin-top: 50px; margin-bottom: 100px;">
                                <h2 style="color: green; text-align: center;">Your order is being processed. Please wait.</h2>
                                <h2 style="color: green; text-align: center;">You will be contacted to clarify the details of the order.</h2>
                            </div>
                            <?php }else{ ?>
                        <div style="text-align: center; margin-top: 50px">
                        <h4>Your information</h4>
                            <?php while ($info = mysqli_fetch_assoc($userInfo)){?>
                                    <p class="profile_text"><strong style="margin-right: 70px;">Your name:</strong> <input type="text" name="name" placeholder="Your name" value="<?= $info[
                                'name_user'
                            ] ?>" required></p>
                                    <p class="profile_text"><strong style="margin-right: 47px;">Your surname:</strong> <input type="text" name="surname" placeholder="Your surname" value="<?= $info[
                                'surname'
                            ] ?>" required></p>
                                    <p class="profile_text"><strong style="margin-right: 70px;">Your email:</strong> <input type="email"  name="mail" placeholder="Your email" value="<?= $info[
                                'email'
                            ] ?>" required></p>
                                    <p class="profile_text"><strong>Your phone number:</strong> <input type="tel" name="phone_number" placeholder="Your phone number" value="<?= $info[
                                'phone_number'
                            ] ?>" required></p>
                                    <p class="profile_text"><strong style="margin-right: 55px;">Your address:</strong> <input type="text" name="address" placeholder="Your address" value="<?= $info[
                                'address'
                            ] ?>" required></p>
                            <div style="text-align: center; margin-top: 20px; margin-bottom: 50px ;">
                                <input style="width: 150px" class="btn btn-primary" type="submit" name="buy_order" value="Buy">
                            </div>
                            <?php
                                }
                            ?>
                        </div>
                        <?php

                            }
                            ?>
                    
                
                </div>
            </form>
        </main>
    <?php include_once "../templates/footer.php"; ?>
</body>
</html>

