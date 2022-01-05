<?php
include_once 'server/server_admin.php';
include_once '../server_website/bd.php';
$good = addProfileAdmin($connect);
$userId = (int) trim(strip_tags($_GET['userId']));
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../style/style_top.css">
    <link rel="stylesheet" href="../style/style_profile.css">
    <title>Document</title>
</head>
<body>
<header class="header">
<div class="header_top"></div>
    <header class="header">
        <div class="header_logo_links">
            <a href="admin.php?userId=<?= $userId ?>"><img class="header_logo_top" src="../img/Rectangle.png" alt="logo"></a>
            <div class="header_links">
            <a style="text-decoration: none;" href="product_skates_admin.php?userId=<?= $userId ?>"><p style="margin: 0;" class="header_link">Electric Skateboards</p></a>
            <a style="text-decoration: none;" href="product_scooters_admin.php?userId=<?= $userId ?>"><p style="text-decoration: none;" class="header_link">Electric Scooters</p></a>
            <a style="text-decoration: none;" href="product_accessories_admin.php?userId=<?= $userId ?>"><p style="text-decoration: none;" class="header_link">Accessories</p></a>
            <a style="text-decoration: none;" href="question_people_for_admin.php?userId=<?= $userId ?>"><p style="text-decoration: none;" class="header_link">Contact_questions</p></a>
            <a style="text-decoration: none;" href="profile_admin.php?userId=<?= $userId ?>"><p style="text-decoration: none;" class="header_link">Profile</p></a>
            <a style="text-decoration: none;" href="bascet_users_admin.php?userId=<?= $userId ?>"><p style="text-decoration: none;" class="header_link">Bascet_Users</p></a>
            <a style="text-decoration: none;" href="users_admin.php?userId=<?= $userId ?>"><p style="text-decoration: none;" class="header_link">Users</p></a>
            <a style="text-decoration: none;" href="../entrance.php"><p style="margin: 0; margin-left: 50px; margin-right:20px" class="header_link">Exit</p></a>
        </div>
    </header>
    <hr>
    <main>
            <h1 style="text-align: center;">PROFILE ADMIN</h1>
            <div class="profile">
            <?php while ($data = mysqli_fetch_assoc($good)) { ?>
            <form action="server/core_server_admin.php?userId=<?= $userId ?>" method="post"  enctype="multipart/form-data">
                <p class="profile_text"><strong style="margin-right: 70px;">Your name:</strong> <input type="text" name="name" value="<?= $data[
                    'name_user'
                ] ?>"></p>
                <p class="profile_text"><strong style="margin-right: 47px;">Your surname:</strong> <input type="text" name="surname" value="<?= $data[
                    'surname'
                ] ?>"></p>
                <p class="profile_text"><strong style="margin-right: 73px;">Your login:</strong> <input type="text" name="login" value="<?= $data[
                    'login'
                ] ?>"></p>
                <p class="profile_text"><strong style="margin-right: 47px;">Your birthday:</strong> <input style="width: 189px;" type="date" name="birthday" value="<?= $data[
                    'birthday'
                ] ?>"></p>
                <p class="profile_text"><strong style="margin-right: 70px;">Your email:</strong> <input type="email" name="mail" value="<?= $data[
                    'email'
                ] ?>"></p>
                <p class="profile_text"><strong>Your phone number:</strong> <input type="tel" name="phone_number" value="<?= $data[
                    'phone_number'
                ] ?>"></p>
                <p class="profile_text"><strong style="margin-right: 55px;">Your address:</strong> <input type="text" name="address" value="<?= $data[
                    'address'
                ] ?>"></p>
                <p class="profile_text"><strong style="margin-right: 59px;">Your gender:</strong> <input type="text" name="experience" value="<?= $data[
                    'men_or_women'
                ] ?>"></p>
                <p class="password"><strong>Your password:</strong>
                <input
                    class="field"
                    type="password"
                    id="password-input"
                    placeholder="Your password"
                    name="password"
                    value="<?= $data['password'] ?>"
                    required
                >
                <a
                    href="#"
                    class="password-control"
                    onclick="return show_hide_password(this);"
                ></a>
                </p>
                <div style="text-align: center; margin-top: 20px; margin-bottom: 50px ;">
                    <input style="width: 100px" class="btn btn-primary" type="submit" name="profile_save" value="Save">
                </div>
            </form>
            <?php } ?>
        </div>
    </main>
<script src="../js/script.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>