<?php
$userId = (int) trim(strip_tags($_GET['userId']));
include_once 'server/server_admin.php';
include_once '../server_website/bd.php';
$good = setUsersAdmin($connect);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/style_top.css">
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
    <main style="text-align: center;">
        <h1>USERS</h1>
            <table style="border: 1px solid grey; border-collapse: collapse; text-align:center; margin:0 auto">
                <tr style="border: 1px solid grey;">
                    <th style="border: 1px solid grey; width:100px">ID user</th>
                    <th style="border: 1px solid grey; width:250px">name_user</th>
                    <th style="border: 1px solid grey; width:250px">surname_user</th>
                    <th style="border: 1px solid grey; width:250px">email</th>
                    <th style="border: 1px solid grey; width:250px">phone_number</th>
                    <th style="border: 1px solid grey; width:250px">address</th>
                </tr>
                <?php while ($data = mysqli_fetch_assoc($good)) { ?>
                    <tr style="border: 1px solid grey;">
                        <th style="border: 1px solid grey;"><?= $data[
                            'id'
                        ] ?></th>
                        <th style="border: 1px solid grey;"><?= $data[
                            'name_user'
                        ] ?></th>
                        <th style="border: 1px solid grey;"><?= $data[
                            'surname'
                        ] ?></th>
                        <th style="border: 1px solid grey;"><?= $data[
                            'email'
                        ] ?></th>
                        <th style="border: 1px solid grey;"><?= $data[
                            'phone_number'
                        ] ?></th>
                        <th style="border: 1px solid grey;"><?= $data[
                            'address'
                        ] ?></th>
                    </tr>

                <?php } ?>
            </table>
    </main>
    
</body>
</html>