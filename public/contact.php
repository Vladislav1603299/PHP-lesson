<?php
$userId = (int) trim(strip_tags($_GET['userId'])); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/style_top.css">
    <link rel="stylesheet" href="../style/style_contact.css">
    <title>contact</title>
</head>
<body>
<?php include_once "../templates/menu_header.php"; ?>
    <main>
        <div class="main_contact">
            <h2>Contact Us</h2>
            <hr style="width: 160px;">
            <p>Please be sure to check out the <a style="text-decoration: none; color: red;" href="FAQs.php?userId=<?= $userId ?>">FAQ</a> page which will help answer some basic questions.</p>
            <p>If you have additional questions please fill out the following form. If your question has to do with your order, <b>please include your order number.</b></p>
            <form action="../controllers/core_server_admin.php?userId=<?= $userId ?>" method="post"  enctype="multipart/form-data">
                <h4 class="main_contact_input_name">Your Name</h4>
                <input class="main_input_desk1" type="text" name="people_name" required>
                <h4 class="main_contact_input_name">Your Email Address:</h4>
                <input class="main_input_desk2" type="email" name="people_mail" required>
                <h4 class="main_contact_input_name">Your Message:</h4>
                <textarea class="main_input_desk3" type="text" name="people_question" rows="10" required></textarea><br><br>
                <input class="btn btn-primary" type="submit" name="submitPeopleQuestion" value="SUBMIT">
            </form>
            <div class="main_adress">
                <p class="main_adress_text">Email us:</p>
                <p class="main_adress_text">info@boostedusa.com</p>
                <p class="main_adress_text">service@boostedusa.com</p>
                <p class="main_adress_text">Boosted USA</p>
                <p class="main_adress_text">1281 Andersen Drive Suite K</p>
                <p class="main_adress_text">San Rafael, CA 94901</p>
            </div>
            <div class="main_map">
                <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Aef94139fe0e7c331aec50f9af732921217606c3930079d15309818c68f93ea86&amp;width=100%&amp;height=412&amp;lang=ru_RU&amp;scroll=true"></script>
            </div>
        </div>
        <div class="main_line"></div>
    <div class="main_footer"></div>
    </main>
    <?php include_once "../templates/footer.php"; ?>
</body>
</html>