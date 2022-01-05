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
    $address_user,
    $password_user
) {
    $sql = "UPDATE `users` SET `name_user`='$name_user', `surname`='$surname_user', `login`='$login_user', `birthday`='$birthday_user', `email`='$email_user', `phone_number`='$phone_number_user', `men_or_women`='$gender_user', `address`='$address_user',  `password`='$password_user' WHERE `id`='$userId'";

    $res = mysqli_query($connect, $sql);

    return $res;
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
?>


