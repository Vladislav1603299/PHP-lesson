<?php
include_once '../models/server_website.php';
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
<?php include_once "../templates/menu_header_home_page.php"; ?>
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
<?php include_once "../templates/footer.php"; ?>
</body>
</html>