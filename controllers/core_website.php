<?php
include_once '../models/server_website.php';
include_once '../config/bd.php';

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
$old_password_user = trim(strip_tags($_POST['oldPassword']));
$new_password_user = trim(strip_tags($_POST['newPassword']));

$name_g = $_POST['name_g'];

$saltPass = "jujmkutf422h8545gh";
$old_password_user = $saltPass.md5($old_password_user).$saltPass;
$new_password_user = $saltPass.md5($new_password_user).$saltPass;


if ($_POST['addToBascetSkate']) {
    $sqlSkate = "SELECT * FROM `users_products_bascet_all` WHERE `user_id`='$userId' AND `product_id`='$id'";
    $resSkate = mysqli_query($connect, $sqlSkate);
    while($data = mysqli_fetch_assoc($resSkate)){
        $id_good_skate = $data['product_id'];
        $name_good_skate = $data['name_product'];
        $id_good_line = $data['id'];
    };
        if($id == $id_good_skate && $name_product == $name_good_skate){
            updateProductBascet(
                $connect,
                $id,
                $name_product,
                $userId,
                $count,
                $id_good_line
            );

        } else {
            
            addProductBascet(
                $connect,
                $id,
                $name_product,
                $userId,
                $price,
                $count,
                $img
            );
        }
    
    header("Location: ../public/product_skate_card.php?userId=$userId&id=$id");
} elseif ($_POST['addToBascetScooter']) {
    $sqlScooter = "SELECT * FROM `users_products_bascet_all` WHERE `user_id`='$userId' AND `product_id`='$id'";
    $resScooter = mysqli_query($connect, $sqlScooter);
    while($data = mysqli_fetch_assoc($resScooter)){
        $id_good_scooter = $data['product_id'];
        $name_good_scooter = $data['name_product'];
        $id_good_line = $data['id'];
    };
        if($id == $id_good_scooter && $name_product == $name_good_scooter){
            updateProductBascet(
                $connect,
                $id,
                $name_product,
                $userId,
                $count,
                $id_good_line
            );

        } else {
            addProductBascet(
                $connect,
                $id,
                $name_product,
                $userId,
                $price,
                $count,
                $img
            );
        }
    header("Location: ../public/product_scooter_card.php?userId=$userId&id=$id");
} elseif ($_POST['addToBascetAccessories']) {
    $sqlAccessories = "SELECT * FROM `users_products_bascet_all` WHERE `user_id`='$userId' AND `product_id`='$id'";
    $resAccessories = mysqli_query($connect, $sqlAccessories);
    while($data = mysqli_fetch_assoc($resAccessories)){
        $id_good_accessories = $data['product_id'];
        $name_good_accessories = $data['name_product'];
        $id_good_line = $data['id'];
    };
        if($id == $id_good_accessories && $name_product == $name_good_accessories){
            updateProductBascet(
                $connect,
                $id,
                $name_product,
                $userId,
                $count,
                $id_good_line
            );

        } else {
            addProductBascet(
                $connect,
                $id,
                $name_product,
                $userId,
                $price,
                $count,
                $img
            );
        }
    header("Location: ../public/product_accessories_card.php?userId=$userId&id=$id");
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
        $address_user
    );
    header("Location: ../public/profile.php?userId=$userId");
} elseif ($_POST['profile_save_pass']) {
    editProfilePass(
        $connect,
        $userId,
        $old_password_user,
        $new_password_user
    );
    header("Location: ../public/profile.php?userId=$userId");
} elseif ($action == 'delGoodBascet') {
    delGoodBascet($connect, $id);
    header("Location: ../public/bascet.php?userId=$userId");
} elseif ($action == 'minusGood'){
    minusGood($connect, $id, $userId, $name_product);
    header("Location: ../public/bascet.php?userId=$userId");
} elseif ($action == 'plusGood'){
    plusGood($connect, $id, $userId, $name_product);
    header("Location: ../public/bascet.php?userId=$userId");  
} elseif ($_POST['buy_order']){
    order($connect, $userId, $name_user, $surname_user, $email_user, $phone_number_user, $address_user);
    editProfileOrder($connect, $userId, $name_user, $surname_user, $email_user, $phone_number_user, $address_user);
    header("Location: ../public/order.php?userId=$userId&status=success");
}

?>
