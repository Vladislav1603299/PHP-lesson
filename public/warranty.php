<?php
$userId = (int) trim(strip_tags($_GET['userId'])); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/style_top.css">
    <link rel="stylesheet" href="../style/style_warranty.css">
    <title>warranty</title>
</head>
<body>
<?php include_once "../templates/menu_header.php"; ?>
    <main>
        <div class="main_warranty">
            <h2>Warranty</h2>
            <hr style="width: 135px;">
            <p class="main_warranty_text">BoostedUSA warrants this product to be free of major defects in material or workmanship to the original purchaser for a period of 60 days from the original date of purchase. This warranty is subject to the following limitations:</p>
            <p class="main_warranty_text">-The warranty is valid only when the product is used on smooth paved surfaces only and does not cover products used illegally or on uneven surfaces.</p>
            <p class="main_warranty_text">-BoostedUSA will make the final warranty determination, which may require inspection and/or photos of the equipment, which clearly show the defect(s). If necessary, this information must be returned to BoostedUSA, postage prepaid.</p>
            <p class="main_warranty_text">-If a product is deemed to be defective by BoostedUSA, the warranty covers the repair or replacement of the defective product only.</p>
            <p class="main_warranty_text">-BoostedUSA will not be responsible for any costs, losses, injuries, or damages incurred as a result of loss of use of this product.</p>
            <p class="main_warranty_text">-The warranty does not cover damage caused by misuse, abuse, neglect or normal wear and tear including but not limited to, riding on dirt or uneven surfaces, damage due to excessive sun exposure, damage caused by improper handling or storage, damage caused by impact, damage caused by use in contravention of local law, or damage caused by anything other than defects in material and workmanship.</p>
            <p class="main_warranty_text">-This warranty is voided if any unauthorized repair, change or modification has been made to any part of the equipment.</p>
            <p class="main_warranty_text">-The warranty for any repaired or replaced equipment is good from the date of the original purchase only. The original purchase receipt must accompany all warranty claims. EXCEPT FOR THE FOREGOING WARRANTIES, AND TO THE FULLEST EXTENT PERMISSIBLE UNDER APPLICABLE LAW, BOOSTED USA DISCLAIMS ALL REPRESENTATIONS AND WARRANTIES, EXPRESSED OR IMPLIED, CONCERNING OR RELATED TO THE PRODUCTS.</p>
            <p class="main_warranty_text">-Warranty claims must be processed and be issued a return authorization prior to shipping to BoostedUSA or your package will be refused upon delivery.</p>
        </div>
        <div class="main_line"></div>
    <div class="main_footer"></div>
    </main>
    <?php include_once "../templates/footer.php"; ?>
</body>
</html>