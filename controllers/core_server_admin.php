<?php
include_once '../models/server_admin.php';
include_once '../config/bd.php';

$name_people = trim(strip_tags($_POST['people_name']));
$mail_people = trim(strip_tags($_POST['people_mail']));
$question_people = trim(strip_tags($_POST['people_question']));
$action = trim(strip_tags($_GET['action']));
$id = (int) trim(strip_tags($_GET['id']));
$name = trim(strip_tags($_POST['name']));
$way_image1 = trim(strip_tags($_POST['src']['0']));
$way_image2 = trim(strip_tags($_POST['src']['1']));
$way_image3 = trim(strip_tags($_POST['src']['2']));
$description = trim(strip_tags($_POST['description']));
$price = (int) trim(strip_tags($_POST['price']));
$count = (int) trim(strip_tags($_POST['count']));

$userId = (int) trim(strip_tags($_GET['userId']));
$name_user = trim(strip_tags($_POST['name']));
$surname_user = trim(strip_tags($_POST['surname']));
$login_user = trim(strip_tags($_POST['login']));
$birthday_user = trim(strip_tags($_POST['birthday']));
$email_user = trim(strip_tags($_POST['mail']));
$phone_number_user = trim(strip_tags($_POST['phone_number']));
$address_user = trim(strip_tags($_POST['address']));
$gender_user = trim(strip_tags($_POST['experience']));
$old_password_user = trim(strip_tags($_POST['oldPasswordAdmin']));
$new_password_user = trim(strip_tags($_POST['newPasswordAdmin']));

$saltPass = "jujmkutf422h8545gh";
$old_password_user = $saltPass.md5($old_password_user).$saltPass;
$new_password_user = $saltPass.md5($new_password_user).$saltPass;

if ($_POST['submitSkate']) {
    editProductSkate(
        $connect,
        $id,
        $name,
        $way_image1,
        $way_image2,
        $way_image3,
        $description,
        $price,
        $count
    );

    header("Location: ../admin/edit_product_skate_card.php?userId=$userId&id=$id");
} elseif ($_POST['submitScooter']) {
    editProductScooter(
        $connect,
        $id,
        $name,
        $way_image1,
        $way_image2,
        $way_image3,
        $description,
        $price,
        $count
    );

    header("Location: ../admin/edit_product_scooter_card.php?userId=$userId&id=$id");
} elseif ($_POST['submitAccessories']) {
    editProductAccessories(
        $connect,
        $id,
        $name,
        $way_image1,
        $way_image2,
        $way_image3,
        $description,
        $price,
        $count
    );

    header(
        "Location: ../admin/edit_product_accessories_card.php?userId=$userId&id=$id"
    );
} elseif ($_POST['addSkate']) {
    addProductSkate(
        $connect,
        $name,
        $way_image1,
        $way_image2,
        $way_image3,
        $description,
        $price,
        $count
    );
    header("Location: ../admin/product_skates_admin.php?userId=$userId");
} elseif ($_POST['addScooter']) {
    addProductScooter(
        $connect,
        $name,
        $way_image1,
        $way_image2,
        $way_image3,
        $description,
        $price,
        $count
    );
    header("Location: ../admin/product_scooters_admin.php?userId=$userId");
} elseif ($_POST['addAccessories']) {
    addProductAccessories(
        $connect,
        $name,
        $way_image1,
        $way_image2,
        $way_image3,
        $description,
        $price,
        $count
    );
    header("Location: ../admin/product_accessories_admin.php?userId=$userId");
} elseif ($action == 'deleteSkate') {
    deleteProductSkate($connect, $id);
    header("Location: ../admin/product_skates_admin.php?userId=$userId");
} elseif ($action == 'deleteScooter') {
    deleteProductScooter($connect, $id);
    header("Location: ../admin/product_scooters_admin.php?userId=$userId");
} elseif ($action == 'deleteAccessories') {
    deleteProductAccessories($connect, $id);
    header("Location: ../admin/product_accessories_admin.php?userId=$userId");
} elseif ($_POST['submitPeopleQuestion']) {
    sendQuestion($connect, $name_people, $mail_people, $question_people);
    header("Location: ../public/contact.php?userId=$userId");
} elseif ($_POST['profile_save']) {
    editProfileAdmin(
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
    header("Location: ../admin/profile_admin.php?userId=$userId");
} elseif ($_POST['profile_save_pass']) {
    editProfilePassAdmin(
        $connect,
        $userId,
        $old_password_user,
        $new_password_user
    );
    header("Location: ../admin/profile_admin.php?userId=$userId");
}
?>
