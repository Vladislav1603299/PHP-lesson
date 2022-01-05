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
    <link rel="stylesheet" href="../style/style_shipping.css">
    <title>shipping</title>
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
        <div class="main_shipping_main">
            <h2>Shipping</h2>
            <hr style="width: 130px;">
            <h4 style="font-size: 17px; margin: 0; margin-top: 20px;">Canadian Shipping:</h4>
            <p class="main_shipping_text">-After you submit the order, it is firm. Do NOT order something and then send a message asking the order to be canceled or you are in for bad news. Turning international orders around is highly expensive and difficult.</p>
            <p class="main_shipping_text">-All orders ship UPS. You will be responsible for taxes, duty, customs, brokerage fees, etc. You will owe these fees upon delivery. Orders will not be refunded or canceled because you did not expect to pay these fees. Fees are estimated between 10% and 20% of the total order value but depend on your province. Please note these fees could be more, and we do not control them.</p>
            <p class="main_shipping_text">Shipping on items between $1-$500 USD has a flat fee of $70</p>
            <p class="main_shipping_text">Shipping on items between $501 and up has a flat fee of $150</p>
            <h4 style="font-size: 17px; margin: 0; margin-top: 20px;">USA Shipping:</h4>
            <p class="main_shipping_text">-Shipping is free if the order is over $100.</p>
            <p class="main_shipping_text">-If your order is under $100 there is a $15 shipping charge.</p>
            <p class="main_shipping_text">-We ship only in the USA, except to Alaska and Hawaii via Fedex and UPS.</p>
            <p class="main_shipping_text">-We try to be as reasonable as possible with shipping.  If for some reason shipping to your address is not feasible, you will be contacted and given the option to pay the difference or we will refund you ASAP.</p>
            <p class="main_shipping_text">-The only place outside of the USA that we are shipping as of now is Canada.  Please follow @Boosted_USA on Instagram for the latest shipping announcements.</p>
            <p class="main_shipping_text">-If you have any questions please contact us before ordering.</p>
            <p class="main_shipping_text">-We ship Via UPS.</p>
            <p class="main_shipping_text">-We will do our best to get your order out one day after you place it.  Please note rush shipping is not available because we must ship via ground.</p>
            <p class="main_shipping_text">-Your signature will be required if you are buying a scooter or skateboard.</p>
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