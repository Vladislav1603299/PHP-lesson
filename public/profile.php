<?php
include_once '../models/server_website.php';
include_once '../config/bd.php';
$userId = (int) trim(strip_tags($_GET['userId']));
$good = addProfile($connect);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/style_top.css">
    <link rel="stylesheet" href="../style/style_profile.css">
    <title>Document</title>
</head>
<body>
<?php include_once "../templates/menu_header.php"; ?>
    <main>
        <h1 style="text-align: center;">PROFILE</h1>
        <div class="profile">
            <?php while ($data = mysqli_fetch_assoc($good)) { ?>
            <form action="../controllers/core_website.php?userId=<?= $userId ?>" method="post"  enctype="multipart/form-data">
                <p class="profile_text"><strong style="margin-right: 70px; margin-left: 50px;">Your name:</strong> <input type="text" name="name" placeholder="Your name" value="<?= $data[
                    'name_user'
                ] ?>"></p>
                <p class="profile_text"><strong style="margin-right: 47px; margin-left: 50px;">Your surname:</strong> <input type="text" name="surname" placeholder="Your surname" value="<?= $data[
                    'surname'
                ] ?>"></p>
                <p class="profile_text"><strong style="margin-right: 73px; margin-left: 50px;">Your login:</strong> <input type="text" name="login" placeholder="Your login" value="<?= $data[
                    'login'
                ] ?>" required></p>
                <p class="profile_text"><strong style="margin-right: 47px; margin-left: 50px;">Your birthday:</strong> <input style="width: 189px;" type="date" name="birthday" value="<?= $data[
                    'birthday'
                ] ?>"></p>
                <p class="profile_text"><strong style="margin-right: 70px; margin-left: 50px;">Your email:</strong> <input type="email" name="mail" placeholder="Your email" value="<?= $data[
                    'email'
                ] ?>" required></p>
                <p class="profile_text"><strong style="margin-left: 50px;">Your phone number:</strong> <input type="tel" name="phone_number" placeholder="Your phone number" value="<?= $data[
                    'phone_number'
                ] ?>"></p>
                <p class="profile_text"><strong style="margin-right: 55px; margin-left: 50px;">Your address:</strong> <input type="text" name="address" placeholder="Your address" value="<?= $data[
                    'address'
                ] ?>"></p>
                <p class="profile_text"><strong style="margin-right: 59px; margin-left: 50px;">Your gender:</strong> <input type="text" name="experience" placeholder="Your gender" value="<?= $data[
                    'men_or_women'
                ] ?>"></p>
                <div style="text-align: center; margin-top: 20px; margin-bottom: 50px ;">
                    <input style="width: 100px" class="btn btn-primary" type="submit" name="profile_save" value="Save">
                </div>
                </form>
            <form action="../controllers/core_website.php?userId=<?= $userId ?>" method="post"  enctype="multipart/form-data">
                <h4 style="text-align:center">Сhange password</h4>
                <p class="password1"><strong style="margin-left: 50px;">Your old password:</strong>
                <input
                    style="margin-left:0; margin-left:13px"
                    class="field"
                    type="password"
                    id="password-input1"
                    placeholder="Your old password"
                    name="oldPassword"
                    required
                >
                <a
                    href="#"
                    class="password-control1"
                    onclick="return show_hide_password1(this);"
                ></a>
                </p>
                <p class="password2"><strong style="margin-left: 50px;">Your new password:</strong>
                <input
                    style="margin-left:0; margin-left:7px"
                    class="field"
                    type="password"
                    id="password-input2"
                    placeholder="Your new password"
                    minlength="6"
                    name="newPassword"
                    required
                >
                <a
                    href="#"
                    class="password-control2"
                    onclick="return show_hide_password2(this);"
                ></a>
                </p>
                <div style="text-align: center; margin-top: 20px; margin-bottom: 50px ;">
                    <input style="width: 200px" class="btn btn-primary" type="submit" name="profile_save_pass" value="Save password">
                </div>
            </form>
            <?php } ?>
        </div>
        <div class="main_line"></div>
    <div class="main_footer"></div>
    </main>
    <?php include_once "../templates/footer.php"; ?>
<script src="../js/script.js"></script>
</body>
</html>