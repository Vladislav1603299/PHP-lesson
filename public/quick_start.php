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
    <link rel="stylesheet" href="../style/style_quick_start.css">
    <title>quick_start</title>
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
        <div class="main_quick_start">
            <h2>Quick Start</h2>
            <hr style="width: 165px;">
            <h4 style="text-align: center;" class="main_quick_start_header">QUICK START GUIDE</h4>
            <p class="main_quick_start_text"><b class="main_quick_start_header">YOUR BOARD CAN LOSE POWER AND BRAKES AT ANYMOMENT</b> due to radio interference, a dead remote battery, unintentional release of the Engage Button, downhill overcharging of a full battery, and other factors. If this happens, the board turns back into an unpowered skateboard, so only ride your Boosted board at speeds and on hills where you’d be comfortable without power and brakes.</p> 
            <p class="main_quick_start_text"><b class="main_quick_start_header">BRAKING DOWNHILL ON A FULL BATTERY WILL CAUSEBOARD SHUTDOWN</b> since the regenerative braking will overcharge the battery. To prevent this from happening, the remote will warn you by beeping, and you’ll lose your braking power. Safely come to a stop before this happens, and ride on flats or uphill to drain the battery before attempting downhill again.</p>
            <p class="main_quick_start_text"><b class="main_quick_start_header">THE THROTTLE IN EXPERT AND PRO MODE IS EXTREMELY SENSITIVE</b> to make the board responsive and fun, but it also means fast or sudden inputs can easily cause you to fall off. Start by trying to move forward as slowly as possible in these modes.</p>
            <p class="main_quick_start_text"><b class="main_quick_start_header">HILLS AND HIGH SPEED CAN BE VERY DANGEROUS</b> because crashes can cause serious injuries, or worse. Be extra careful when pushing the limits of the board, even if you’re an experienced rider.</p>
            <p class="main_quick_start_text"><b class="main_quick_start_header">CARS AND OTHER VEHICLES CAN KILL YOU</b> , so always be aware of your surroundings when riding in the presence of other vehicles. Ride defensively and assume other vehicles can’t see you. Remember that your board may lose power and brakes at any moment. Be aware of the laws that govern the use of your board on public roads, bike paths, sidewalks, or other places that you may ride.</p>
            <p class="main_quick_start_text"><b class="main_quick_start_header">ALWAYS WEAR A HELMET.</b> Other safety gear, like gloves, pads, and long sleeves is highly recommended.</p>
            <p class="main_quick_start_text"><b class="main_quick_start_header">DO NOT RIDE WITHOUT READING THIS MESSAGE.</b> Whenever you ride a Boosted board, you risk death or serious injury from loss of control, collisions, and falls. To ride safely, you must read and follow all warnings and instructions in the manual.</p>
            <p class="main_quick_start_text"><b class="main_quick_start_header">ALWAYS WEAR A HELMET WHEN RIDING!</b> Avoid water, wet surfaces, slippery or uneven surfaces, steep hills, traffic, cracks, train tracks, gravel, rocks, or any obstacles that could cause a loss of traction. Avoid night riding, areas with poor visibility, and narrow spaces.</p>
            <p class="main_quick_start_text"><b class="main_quick_start_header">WARNING:</b> Do not ride a Boosted board in environments, on inclines, or at speeds where you would not be safely in control of an unpowered skateboard. In the event of wireless interference or battery fault, you may need to rely on skating techniques, like foot braking or sliding to stop.</p>
            <p class="main_quick_start_text"><b class="main_quick_start_header">WARNING: AVOID WATER!</b> Your Boosted board is not waterproof, and riding on wet surfaces can cause a loss of traction. Electronics and motors are water-resistant to avoid damage from puddles and wet roads, but the deck, bearings, and other components can still be damaged. Damage to the board due to water exposure is not covered under warranty.</p>
            <p class="main_quick_start_text"><b class="main_quick_start_header">WARNING: PINCH POINTS</b> Keep fingers, hair, and clothing away from belts, motors, wheels, and all moving parts.</p>
            <p class="main_quick_start_text"><b class="main_quick_start_header">WARNING: RISK OF ELECTRIC SHOCK!</b> Do not open or tamper with electronics housings, which also voids the warranty.</p>
            <p class="main_quick_start_text"><b class="main_quick_start_header">WARNING: ALWAYS INSPECT YOUR BOARD / REV BEFORE YOU RIDE!</b> Check wheels, bearings, deck, and motors for signs of damage before you ride.  Replace as necessary.  If you ever have a concern please contact us immediately. Be sure all screws, nuts and bolts are tight. The streets that you ride on will cause excessive vibration and it is possible for these items to loosen over time, so check regularly. Please ride responsibly and respect those around you, both for your safety and to help promote a new mode of transportation.</p>
            <p class="main_quick_start_text">If you ever have any questions do not hesitate reach out to us: info@boostedusa.com and we will do our best to respond ASAP.</p>
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