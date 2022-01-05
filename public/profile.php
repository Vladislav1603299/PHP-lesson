<?php
include_once '../server_website/server_website.php';
include_once '../server_website/bd.php';
$userId = (int) trim(strip_tags($_GET['userId']));
$good = addProfile($connect);
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
            <a href="index.php?userId=<?= $userId ?>"><img class="header_logo_top" src="../img/Rectangle.png" alt="logo"></a>
            <div class="header_links">
            <a style="text-decoration: none;" href="skates.php?userId=<?= $userId ?>"><p style="margin: 0;" class="header_link">Electric Skateboards</p></a>
            <a style="text-decoration: none;" href="scooters.php?userId=<?= $userId ?>"><p style="text-decoration: none;" class="header_link">Electric Scooters</p></a>
            <a style="text-decoration: none;" href="accessories.php?userId=<?= $userId ?>"><p style="text-decoration: none;" class="header_link">Accessories</p></a>
                
                <div class="dropdown">
                <a style="display: flex; margin-top:-14px; height: 21px; font-size: 14px; line-height: 21px; letter-spacing: 1px; text-transform: uppercase; color: black; margin: 0; margin-left: 72px; background-color: white; color: black; border:none; text-decoration: none;"  href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                <p class="header_link_info">More Info</p>
                </a>
                    <ul  class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                        <li><a style="color: black;" class="dropdown-item" href="shipping.php?userId=<?= $userId ?>">Shipping</a></li>
                        <li><a style="color: black;" class="dropdown-item" href="FAQs.php?userId=<?= $userId ?>">FAQs</a></li>
                        <li><a style="color: black;" class="dropdown-item" href="warranty.php?userId=<?= $userId ?>">Warranty</a></li>
                        <li><a style="color: black;" class="dropdown-item" href="quick_start.php?userId=<?= $userId ?>">Quick Start Guide</a></li>
                        <li><a style="color: black;" class="dropdown-item" href="contact.php?userId=<?= $userId ?>">Contact</a></li>
                    </ul>
                        
                </div>
                <a style="text-decoration: none;" href="../entrance.php"><p style="margin: 0; margin-left: 65px" class="header_link">Exit</p></a>
            </div>
            <div style="margin: 0; margin-top: 15px" class="header_logo">
                <a href="profile.php?userId=<?= $userId ?>"><img class="logo" src="../img/profile.png" alt="profile"></a>
                <a href="bascet.php?userId=<?= $userId ?>"><img class="logo" src="../img/bascet.png" alt="bascet"></a>
            </div>
        </div>
        <hr>
    </header>
    <main>
            <h1 style="text-align: center;">PROFILE</h1>
            <div class="profile">
            <?php while ($data = mysqli_fetch_assoc($good)) { ?>
            <form action="../server_website/core_website.php?userId=<?= $userId ?>" method="post"  enctype="multipart/form-data">
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