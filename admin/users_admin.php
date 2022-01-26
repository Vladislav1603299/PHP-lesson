<?php
$userId = (int) trim(strip_tags($_GET['userId']));
include_once '../models/server_admin.php';
include_once '../config/bd.php';
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
<?php include "../templates/menu_header_admin.php" ?>
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