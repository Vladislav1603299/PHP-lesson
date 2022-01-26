<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">  

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
                <?php
                if($_GET['userId'] == 0){?>
                    <a style="text-decoration: none;" href="entrance.php"><p style="margin: 0; margin-left: 65px" class="header_link">Entrance</p></a>
                    <a style="text-decoration: none;" href="registration.php"><p style="margin: 0; margin-left: 65px" class="header_link">Registration</p></a>
                <?php
                } else {
                    ?>
                    <a style="text-decoration: none;" href="index.php?userId=0"><p style="margin: 0; margin-left: 65px" class="header_link">Exit</p></a>
                    <?php
                }
                ?>
            </div>
            <div style="margin: 0; margin-top: 15px" class="header_logo">
            <?php
            if($_GET['userId'] == 0){?>
                <a href="bascet.php?userId=<?= $userId ?>"><img class="logo" src="../img/bascet.png" alt="bascet"></a>
                <?php
            } else { ?>
                <a href="profile.php?userId=<?= $userId ?>"><img class="logo" src="../img/profile.png" alt="profile"></a>
                <a href="bascet.php?userId=<?= $userId ?>"><img class="logo" src="../img/bascet.png" alt="bascet"></a>
                <?php
            }
            ?>
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


<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>