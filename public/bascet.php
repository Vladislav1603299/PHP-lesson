<?php
$userId = (int) trim(strip_tags($_GET['userId']));
include_once '../models/server_website.php';
include_once '../config/bd.php';
$good = getGoods($connect, $userId);
$goodBascetSum = sumGoodsBascet($connect, $userId);
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
<?php include_once "../templates/menu_header.php"; ?>
    <main>
        <h1 class="products_name">BASCET</h1>

        <?php 
        if($_GET['userId'] == 0){?>
            <p style="text-align: center">Register or log in to add products to the bascet!!!</p>
            <div style="text-align: center">
                <a href="entrance.php">Entrance</a>
            </div>
        <?php
        }else{
        while ($datasum = mysqli_fetch_assoc($goodBascetSum)) {
            if(mysqli_num_rows($good) == 0){?>
                <p style="text-align: center;">Your shopping cart is empty</p>
                <?php } else { ?>
                <div style="text-align: center; margin-top: 30px">
                <h3><string>Total cost of goods: </string><?= $datasum[
                    'sum_all'
                ] ?> $</h3>
            </div>
            <?php 
                } 
            }?>

       
        <?php while ($data = mysqli_fetch_assoc($good)) {
            ?>
            <div style="border: 1px solid black; width: 450px; 
height: 200px; display:flex; justify-content:center; align-items:center; margin:0 auto; margin-top:20px">
                <div><img width="150px" src="<?= $data[
                    'image'
                ] ?> " alt="foto"></div>
                
                <div style="margin-left: 20px; text-align:center">
                    <strong style="margin: 0;"><?= $data[
                        'name_product'
                    ] ?></strong>
                    <p style="color: red;"><?= $data[
                        'price'
                    ] ?> $</p>
                    <p style="margin: 0; margin-top:10px">quantity: <?= $data[
                        'count'
                    ] ?> things</p>
                    
                    <a href="../controllers/core_website.php?userId=<?= $userId ?>&id=<?= $data[
    'id'
] ?>&name_product=<?= $data['name_product']?>&action=minusGood"><input style="width:25px" type="submit" name="submit_minus" value="-"></a>
                    <a href="../controllers/core_website.php?userId=<?= $userId ?>&id=<?= $data[
    'id'
] ?>&name_product=<?= $data['name_product']?>&action=plusGood"><input style="width:25px" type="submit" name="submit_plus" value="+"></a>

                    <a href="../controllers/core_website.php?userId=<?= $userId ?>&id=<?= $data[
    'id'
] ?>&name_product=<?= $data['name_product'] ?>&action=delGoodBascet"><input style="margin-top: 20px; background-color:brown; color:white" type="submit" name="delGoodBascet" value="Delete"></a>
                </div>   
            </div>

            <?php } 
            
            if(mysqli_num_rows($good) != 0){?>
        <div style="text-align: center; margin-top: 30px" >
                    <a href="order.php?userId=<?= $userId ?>"><input class="btn btn-primary" type="submit" value="Place an order"></a>
        </div>
    <?php
            }
    }
    ?>
        <div class="main_line"></div>
    <div class="main_footer"></div>
    </main>
    <?php include_once "../templates/footer.php"; ?>
</body>
</html>