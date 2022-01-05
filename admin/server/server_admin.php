<?php

function addProductSkateEdit($connect)
{
    $sqlRequest = "SELECT * FROM products_el_skateboards WHERE id={$_GET['id']}";
    $res = mysqli_query($connect, $sqlRequest);
    return $res;
}

function addProductScooterEdit($connect)
{
    $sqlRequest = "SELECT * FROM products_el_scooters WHERE id={$_GET['id']}";
    $res = mysqli_query($connect, $sqlRequest);
    return $res;
}

function addProductAccessoriesEdit($connect)
{
    $sqlRequest = "SELECT * FROM products_accessories WHERE id={$_GET['id']}";
    $res = mysqli_query($connect, $sqlRequest);
    return $res;
}

function editProductSkate(
    $connect,
    $id,
    $name_product,
    $way_image1,
    $way_image2,
    $way_image3,
    $description,
    $price,
    $count
) {
    $sql = "UPDATE products_el_skateboards SET name_product='$name_product', way_image1='$way_image1', way_image2='$way_image2', way_image3='$way_image3', description='$description', price='$price', count='$count' WHERE id='$id'";

    $res = mysqli_query($connect, $sql);

    return $res;
}

function editProductScooter(
    $connect,
    $id,
    $name_product,
    $way_image1,
    $way_image2,
    $way_image3,
    $description,
    $price,
    $count
) {
    $sql = "UPDATE `products_el_scooters` SET `name_product`='$name_product', `way_image1`='$way_image1', `way_image2`='$way_image2', `way_image3`='$way_image3', `description`='$description', `price`='$price', `count`='$count' WHERE `id`='$id'";

    $res = mysqli_query($connect, $sql);

    return $res;
}

function editProductAccessories(
    $connect,
    $id,
    $name_product,
    $way_image1,
    $way_image2,
    $way_image3,
    $description,
    $price,
    $count
) {
    $sql = "UPDATE `products_accessories` SET `name_product`='$name_product', `way_image1`='$way_image1', `way_image2`='$way_image2', `way_image3`='$way_image3', `description`='$description', `price`='$price', `count`='$count' WHERE `id`='$id'";

    $res = mysqli_query($connect, $sql);

    return $res;
}

function addProductSkate(
    $connect,
    $name_product,
    $way_image1,
    $way_image2,
    $way_image3,
    $description,
    $price,
    $count
) {
    $sql = "INSERT INTO `products_el_skateboards`(`name_product`, `way_image1`, `way_image2`, `way_image3`, `description`, `price`, `count`) VALUES ('$name_product', '$way_image1', '$way_image2', '$way_image3', '$description', '$price', '$count')";
    $res = mysqli_query($connect, $sql);
    return $res;
}

function addProductScooter(
    $connect,
    $name_product,
    $way_image1,
    $way_image2,
    $way_image3,
    $description,
    $price,
    $count
) {
    $sql = "INSERT INTO `products_el_scooters`(`name_product`, `way_image1`, `way_image2`, `way_image3`, `description`, `price`, `count`) VALUES ('$name_product', '$way_image1', '$way_image2', '$way_image3', '$description', '$price', '$count')";
    $res = mysqli_query($connect, $sql);
    return $res;
}

function addProductAccessories(
    $connect,
    $name_product,
    $way_image1,
    $way_image2,
    $way_image3,
    $description,
    $price,
    $count
) {
    $sql = "INSERT INTO `products_accessories`(`name_product`, `way_image1`, `way_image2`, `way_image3`, `description`, `price`, `count`) VALUES ('$name_product', '$way_image1', '$way_image2', '$way_image3', '$description', '$price', '$count')";
    $res = mysqli_query($connect, $sql);
    return $res;
}

function deleteProductSkate($connect, $id)
{
    $sql = "DELETE FROM `products_el_skateboards` WHERE `id`='$id'";
    $res = mysqli_query($connect, $sql);
    return $res;
}
function deleteProductScooter($connect, $id)
{
    $sql = "DELETE FROM `products_el_scooters` WHERE `id`='$id'";
    $res = mysqli_query($connect, $sql);
    return $res;
}
function deleteProductAccessories($connect, $id)
{
    $sql = "DELETE FROM `products_accessories` WHERE `id`='$id'";
    $res = mysqli_query($connect, $sql);
    return $res;
}

function sendQuestion($connect, $name, $mail, $question)
{
    $sql = "INSERT INTO `peoples_questions`(`name_people`, `mail_people`, `question`) VALUES ('$name','$mail','$question')";
    $res = mysqli_query($connect, $sql);
    return $res;
}

function addPeopleQuestion($connect)
{
    $sqlQuestions = 'SELECT * FROM peoples_questions';
    $res = mysqli_query($connect, $sqlQuestions);
    return $res;
}

function addProfileAdmin($connect)
{
    $sqlProfileAdmin = "SELECT * FROM users WHERE id={$_GET['userId']}";
    $res = mysqli_query($connect, $sqlProfileAdmin);
    return $res;
}

function editProfileAdmin(
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

function getGoods($connect)
{
    $sql = 'SELECT * FROM `users_products_bascet_all`';
    $res = mysqli_query($connect, $sql);
    return $res;
}

function sumGoodsBascet($connect)
{
    $sql =
        'SELECT SUM(`price` * `count`) as `sum_all` FROM `users_products_bascet_all`';
    $res = mysqli_query($connect, $sql);
    return $res;
}

function setUsersAdmin($connect)
{
    $sql = 'SELECT * FROM `users`';
    $res = mysqli_query($connect, $sql);
    return $res;
}
?>
    