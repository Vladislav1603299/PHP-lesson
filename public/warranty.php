<?php
$userId = (int) trim(strip_tags($_GET['userId'])); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../style/style_top.css">
    <link rel="stylesheet" href="../style/style_warranty.css">
    <title>warranty</title>
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
    </main>
    <footer class="footer">
    <div class="footer_black_background">
        <div class="footer_logo1">
            <div class="footer_image_logo1"></div>
            <h2 class="footer_logo_heading">Go Fast</h2>
            <p class="footer_logo_text">Boosted is known for its premium performance boards offering a next-level experience.</p>
        </div>
        <div class="footer_logo2">
            <div class="footer_image_logo2"></div>
            <h2 class="footer_logo_heading">Go Far</h2>
            <p class="footer_logo_text">With optional extended battery life, you can get wherever you need to go reliably.</p>
        </div>
        <div class="footer_logo3">
            <div class="footer_image_logo3"></div>
            <h2 class="footer_logo_heading">Go Safe</h2>
            <p class="footer_logo_text">Safety is a #1 priority for Boosted, always wear a helmet when riding.</p>
        </div>
        <div class="footer_logo4">
            <div class="footer_image_logo4"></div>
            <h2 class="footer_logo_heading">Built to Last!</h2>
            <p class="footer_logo_text">Boosted products are engineered to last for years and are extremely reliable.</p>
        </div>
    </div>
    <div class="footer_gray_background">
        <div class="footer_gray_logo"></div>
        <div class="footer_gray_text_block">
            <h3 class="footer_gray_heading1">Explore</h3>
            <div class="footer_texts">
                <p class="footer_gray_text">Electric Skateboards</p>
                <p class="footer_gray_text">Electric Scooters</p>
                <p class="footer_gray_text">Accessories</p>
                <p class="footer_gray_text">FAQs</p>
                <p class="footer_gray_text">Warranty</p>
                <p class="footer_gray_text">Quick Start Guide</p>
                <p class="footer_gray_text">Contact</p>
                <p class="footer_gray_text">Gift Card</p>
                <p class="footer_gray_text">Accessibility Statement</p>
            </div>
        </div>
        <div class="footer_gray_block">
            <h3 class="footer_gray_heading2">About Boosted USA</h3>
            <p class="footer_gray_text2">Boosted empowers people everywhere to commute across their cities, campuses, and communities in ways that were never before possible. Boosted is solving one of the biggest problems people face each day: transportation.</p>
            <div class="footer_texts">
                <p class="footer_gray_text">CaliRides LLC - DBA Boosted USA</p>
                <p class="footer_gray_text">1281 Andersen Drive Ste. K</p>
                <p class="footer_gray_text">San Rafael, CA 94901</p>
            </div>
        </div>
    </div>
    <div class="footer_end">
        <div class="footer_end_txt">
            <p class="footer_end_text">© 2021 <span class="footer_end_text_red">Boosted USA</span>. All Rights Reserved. <span class="footer_end_text_red">Terms of Service</span>. Built by <span class="footer_end_text_red">BH</span></p>
        </div>
        <div class="footer_end_logs">
            <div class="footer_end_logo1"></div>
            <div class="footer_end_logo2"></div>
            <div class="footer_end_logo3"></div>
            <div class="footer_end_logo4"></div>
            <div class="footer_end_logo5"></div>
            <div class="footer_end_logo6"></div>
            <div class="footer_end_logo7"></div>
            <div class="footer_end_logo8"></div>
        </div>
    </div>
</footer>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>