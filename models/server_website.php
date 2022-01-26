<?php

function addProductsSkate($connect)
{
    $sqlRequest =
        'SELECT * FROM `products_el_skateboards` ORDER BY `count` desc';

    $res = mysqli_query($connect, $sqlRequest);
    return $res;
}

function addProductSkate($connect)
{
    $sqlRequest = "SELECT * FROM products_el_skateboards WHERE id={$_GET['id']}";
    $sqlCount = "UPDATE `products_el_skateboards` SET `count`=count+1 WHERE `id`={$_GET['id']}";
    mysqli_query($connect, $sqlCount);
    $res = mysqli_query($connect, $sqlRequest);
    return $res;
}

function addProductsScooter($connect)
{
    $sqlRequest = 'SELECT * FROM `products_el_scooters` ORDER BY `count` desc';
    $res = mysqli_query($connect, $sqlRequest);
    return $res;
}

function addProductScooter($connect)
{
    $sqlRequest = "SELECT * FROM products_el_scooters WHERE id={$_GET['id']}";
    $sqlCount = "UPDATE `products_el_scooters` SET `count`=count+1 WHERE `id`={$_GET['id']}";
    mysqli_query($connect, $sqlCount);
    $res = mysqli_query($connect, $sqlRequest);
    return $res;
}

function addProductsAccessories($connect)
{
    $sqlRequest = 'SELECT * FROM `products_accessories` ORDER BY `count` desc';
    $res = mysqli_query($connect, $sqlRequest);
    return $res;
}

function addProductAccessories($connect)
{
    $sqlRequest = "SELECT * FROM products_accessories WHERE id={$_GET['id']}";
    $sqlCount = "UPDATE `products_accessories` SET `count`=count+1 WHERE `id`={$_GET['id']}";
    mysqli_query($connect, $sqlCount);
    $res = mysqli_query($connect, $sqlRequest);
    return $res;
}

function addProductBascet(
    $connect,
    $product_id,
    $name,
    $user_id,
    $price,
    $count,
    $img
) {
    $sql = "INSERT INTO `users_products_bascet_all`(`product_id`, `name_product`, `user_id`, `price`, `count`, `image`) VALUES ('$product_id', '$name', '$user_id', '$price', '$count', '$img')";
    $res = mysqli_query($connect, $sql);
    return $res;
}


function updateProductBascet(
    $connect,
    $id,
    $name_product,
    $userId,
    $count,
    $id_good_line
){
    $sql = "UPDATE `users_products_bascet_all` SET `count`=count+$count WHERE `product_id`='$id' AND `user_id`='$userId' AND `name_product`='$name_product' AND `id`='$id_good_line'";
    $res = mysqli_query($connect, $sql);
    return $res;
}

function addProfile($connect)
{
    $sqlProfile = "SELECT * FROM users WHERE id={$_GET['userId']}";
    $res = mysqli_query($connect, $sqlProfile);
    return $res;
}

function editProfile(
    $connect,
    $userId,
    $name_user,
    $surname_user,
    $login_user,
    $birthday_user,
    $email_user,
    $phone_number_user,
    $gender_user,
    $address_user
) {
    $sql = "UPDATE `users` SET `name_user`='$name_user', `surname`='$surname_user', `login`='$login_user', `birthday`='$birthday_user', `email`='$email_user', `phone_number`='$phone_number_user', `men_or_women`='$gender_user', `address`='$address_user' WHERE `id`='$userId'";
    $res = mysqli_query($connect, $sql);
    
    return $res;
}

function editProfileOrder(
    $connect,
    $userId,
    $name_user,
    $surname_user,
    $email_user,
    $phone_number_user,
    $address_user
) {
    $sql = "UPDATE `users` SET `name_user`='$name_user', `surname`='$surname_user', `email`='$email_user', `phone_number`='$phone_number_user', `address`='$address_user' WHERE `id`='$userId'";
    $res = mysqli_query($connect, $sql);
    
    return $res;
}

function editProfilePass(
    $connect,
    $userId,
    $old_password_user,
    $new_password_user
    ){
    $sqlOldPass = "SELECT `password` FROM `users` WHERE `id`='$userId'";
    $sqlNewPass = "UPDATE `users` SET `password`='$new_password_user' WHERE `id`='$userId'";
    $resOldPass = mysqli_query($connect, $sqlOldPass);
    
    while($data = mysqli_fetch_assoc($resOldPass)){
        $passOld = $data['password'];
        if($passOld == $old_password_user){
            mysqli_query($connect, $sqlNewPass);
        } else {
            echo "No";
        }
    }
}



function getGoods($connect, $userId)
{
    $sql = "SELECT * FROM `users_products_bascet_all` WHERE `user_id`=$userId";
    $res = mysqli_query($connect, $sql);
    return $res;
}

function delGoodBascet($connect, $id)
{
    $sql = "DELETE FROM `users_products_bascet_all` WHERE `id`='$id'";
    $res = mysqli_query($connect, $sql);
    return $res;
}

function sumGoodsBascet($connect, $userId)
{
    $sql = "SELECT SUM(`price` * `count`) as `sum_all` FROM `users_products_bascet_all` WHERE `user_id`=$userId";
    $res = mysqli_query($connect, $sql);
    return $res;
}

function sumGood($connect, $userId, $id, $name_product)
{
    $sql = "SELECT SUM(`price` * `count`) as `sum_good` FROM `users_products_bascet_all` WHERE `user_id`='$userId' AND `id`='$id' AND `name_product`='$name_product'";
    $res = mysqli_query($connect, $sql);
    return $res;
}

function minusGood($connect, $id, $userId, $name_product){
    $sql = "UPDATE `users_products_bascet_all` SET `count`=count-1 WHERE `user_id`='$userId' AND `id`='$id' AND `name_product`='$name_product'";
    $res = mysqli_query($connect, $sql);
    $sqlCountGet = "SELECT `count` FROM `users_products_bascet_all` WHERE `user_id`='$userId' AND `id`='$id' AND `name_product`='$name_product'";
    $resGet = mysqli_query($connect, $sqlCountGet);
    while($data =  mysqli_fetch_assoc($resGet)){
        $count = $data['count'];
        if($count == 0){
            delGoodBascet($connect, $id);
        };
    }
return $res;
}

function plusGood($connect, $id, $userId, $name_product){
    $sql = "UPDATE `users_products_bascet_all` SET `count`=count+1 WHERE `user_id`='$userId' AND `id`='$id' AND `name_product`='$name_product'";
    $res = mysqli_query($connect, $sql);
    return $res;
}

function order($connect, $userId, $name_user, $surname_user, $email_user, $phone_number_user, $address_user){
    $sql = "SELECT * FROM `users_products_bascet_all` WHERE `user_id`=$userId";
    $res = mysqli_query($connect, $sql);
    while($data = mysqli_fetch_assoc($res)){
        $id_good = $data['id'];
        $name_good = $data['name_product'];
        $price = $data['price'];
        $count = $data['count'];
        $image = $data['image'];
        $sqlAdd = "INSERT INTO `order_users`(`user_id`, `good_id`, `name_good`, `price_good`, `count_good`, `image_good`, `name`, `surname`, `address`, `phone`, `email`) VALUES ('$userId', '$id_good', '$name_good', '$price', '$count', '$image', '$name_user', '$surname_user', '$address_user', '$phone_number_user', '$email_user')";
        $resAdd = mysqli_query($connect, $sqlAdd);
    }
}

?>


