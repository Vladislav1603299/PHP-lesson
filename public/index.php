<?php
include_once '../server_website/server_website.php';
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
    <title>home</title>
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
        <div class="header_background_img">
            <h1 style="padding-top: 50px;" class="header_background_img_welcom">Welcome to Boosted USA</h1>
            <p style="margin-top: 65px;" class="header_background_img_text">The Holy Grail of Electric Skateboards and One REVolutionary Scooter</p>
            <div class="header_input">
                <a href="scooters.php?userId=<?= $userId ?>"><input class="input" type="button" value="BOOSTED REVS"></a>
                <a href="skates.php?userId=<?= $userId ?>"><input class="input" type="button" value="BOOSTED BOARDS"></a>
            </div>
        </div>
        <div class="header_footer">
            <img class="name1" src="../img/electrek.png" alt="name">
            <img class="name2" src="../img/tochcrouch.png" alt="name">
            <img class="name3" src="../img/popular.png" alt="name">
            <img class="name4" src="../img/wired.png" alt="name">
        </div>
    </header>
    <main class="main">
        <h3 class="main_heading">Looking for Boosted Boards, or Boosted Revs?</h3>
        <p class="main_text">Boosted USA acquired all of the remaining inventory directly from Boosted.  This means we have the electric skateboards and scooter you all love and have been looking for.  Get your hands on these highly sought after products while supplies last.</p>
        <div class="main_line"></div>
    <div class="main_images">
        <a class="image_skate" href="skates.php?userId=<?= $userId ?>">
            <div class="main_image1">
                 <div class="main_images_text1">
                     <p class="text_heading1">Shop Boosted Boards</p>
                    <p class="image_text1">In Stock</p>
                </div>
            </div>       
        </a>
        <a class="image_skate" href="scooters.php?userId=<?= $userId ?>">
            <div class="main_image2">
                <div class="main_images_text2">
                    <p class="text_heading2">Shop Boosted Revs</p>
                    <p class="image_text2">In Stock</p>
                </div>
            </div>
        </a>
    </div>
    <div class="main_big_image">
        <p class="big_image_small_heading">High-performance</p>
        <h1 style="margin-top: 10px;" class="big_image_heading">Electric Skateboards</h1>
        <p class="big_image_text">Cruising campus, going to work or getting through that long list of errands has never been easier or more fun.</p>
        <a href="skates.php?userId=<?= $userId ?>"><input class="big_image_input" type="submit" value="Shop Now"></a>
    </div>
    <div class="main_photo_cards1">
        <div class="photo_card1"></div>
        <div class="photo_card2"></div>
        <div class="photo_cards1_text">
            <h3 class="photo_cards1_text_heading">Boosted Rev</h3>
            <p style="margin-top: 20px" class="photo_cards1_text_small">There's never been an electric scooter quite like this. Speed past traffic at 24 mph. Go up to 22 miles on a single charge. You'll get there in no time at all. Stop and go with the roll of your thumb. Its intuitive design means there’s almost no learning curve.</p>
            <a href="scooters.php?userId=<?= $userId ?>"><input class="photo_cards1_input" type="button" value="Shop Now"></a>
        </div>
    </div>
    <div class="main_photo_cards2">
    
            <div class="photo_card12">
                <div class="photo_card12_text">
                    <p class="photo_card12_text_heading">Shop Boosted Stealth</p>
                    <p class="photo_card12_text_small">IN STOCK</p>
                </div>
            </div>
    
        
            <div class="photo_card22">
                <div class="photo_card22_text">
                    <p class="photo_card22_text_heading">Shop Boosted Plus</p>
                    <p class="photo_card22_text_small">IN STOCK</p>
                </div>
            </div>
        
            <div class="photo_card23">
                <div class="photo_card23_text">
                    <p class="photo_card23_text_heading">Shop Boosted Mini</p>
                    <p class="photo_card23_text_small">IN STOCK</p>
                </div>
            </div>
        
    </div>
    <div class="main_videos">
        <iframe class="video1" width="540" height="304" src="https://www.youtube.com/embed/78bXV1ZqQWI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        <iframe class="video2" width="540" height="304" src="https://www.youtube.com/embed/oAQxk9dOJ8k" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
    
    <div class="main_line"></div>
    <div class="main_footer"></div>
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