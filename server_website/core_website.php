<?php
include_once 'server_website.php';
include_once 'bd.php';

$userId = (int) trim(strip_tags($_GET['userId']));
$id = (int) trim(strip_tags($_GET['id']));
$name_product = trim(strip_tags($_GET['name_product']));
$price = (int) trim(strip_tags($_GET['price']));
$count = (int) trim(strip_tags($_POST['count_product']));
$img = trim(strip_tags($_GET['img']));
$action = trim(strip_tags($_GET['action']));

$name_user = trim(strip_tags($_POST['name']));
$surname_user = trim(strip_tags($_POST['surname']));
$login_user = trim(strip_tags($_POST['login']));
$birthday_user = trim(strip_tags($_POST['birthday']));
$email_user = trim(strip_tags($_POST['mail']));
$phone_number_user = trim(strip_tags($_POST['phone_number']));
$address_user = trim(strip_tags($_POST['address']));
$gender_user = trim(strip_tags($_POST['experience']));
$password_user = trim(strip_tags($_POST['password']));

if ($_POST['addToBascetSkate']) {
    addProductBascet(
        $connect,
        $id,
        $name_product,
        $userId,
        $price,
        $count,
        $img
    );
    header("Location: ../public/product_skate_card.php?userId=$userId&id=$id");
} elseif ($_POST['addToBascetScooter']) {
    addProductBascet(
        $connect,
        $id,
        $name_product,
        $userId,
        $price,
        $count,
        $img
    );
    header(
        "Location: ../public/product_scooter_card.php?userId=$userId&id=$id"
    );
} elseif ($_POST['addToBascetAccessories']) {
    addProductBascet(
        $connect,
        $id,
        $name_product,
        $userId,
        $price,
        $count,
        $img
    );
    header(
        "Location: ../public/product_accessories_card.php?userId=$userId&id=$id"
    );
} elseif ($_POST['profile_save']) {
    editProfile(
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
    );
    header("Location: ../public/profile.php?userId=$userId");
} elseif ($action == 'delGoodBascet') {
    delGoodBascet($connect, $id);
    header("Location: ../public/bascet.php?userId=$userId");
}

?>
