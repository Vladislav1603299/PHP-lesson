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
    <link rel="stylesheet" href="../style/style_FAQs.css">
    <title>FAQs</title>
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
        <div class="main_FAQs">
            <h2>FAQs</h2>
            <hr style="width: 80px;">
            <h4 class="main_FAQs_question">Q: Are your products 100% manufactured by Boosted?</h4>
            <p class="main_FAQs_text">A: Yup, we acquired everything that Boosted had, and it came direct from them. </p>
            <h4 class="main_FAQs_question">Q: What if something says out of stock?</h4>
            <p class="main_FAQs_text">A: We are absolutely not permitted to create new products for / by Boosted because their IP was sold off. We can only sell the rest of the stock that we have. Supplies are extremely limited, this is the last of Boosted's stock and when it's gone it's gone forever. Once something says sold out, that is it, you will not be able to get it again. </p>
            <h4 class="main_FAQs_question">Q: Who pays for shipping?</h4>
            <p class="main_FAQs_text">USA answer: We will pay for shipping on anything over $100. If you need something repaired you will be required to pay for shipping both ways. If your board requires a warranty part we will do our best to ship you a replacement part on us to get you back up and rolling.</p>
            <p class="main_FAQs_text">Canadian answer: Please see <a class="main_FAQs_link" href="shipping.php?userId=<?= $userId ?>">shipping page</a></p>
            <h4 class="main_FAQs_question">Q: Where are you located, can I come in for a visit?</h4>
            <p class="main_FAQs_text">A:  We are located in San Francisco, CA and are not open to the public.</p>
            <h4 class="main_FAQs_question">Q: I am a retailer and am desperate for more Boosted products.  Can you hook me up?</h4>
            <p class="main_FAQs_text">A: Send us an email: <a  class="main_FAQs_link" href="mailto:support@boostedusa.com">support@boostedusa.com</a></p>
            <h4 class="main_FAQs_question">Q: I am international, specifically Canada.  Can I buy from you?</h4>
            <p class="main_FAQs_text">A: We are now shipping to Canada! We are actively trying to go more international, please keep an eye on our instagram @boosted_usa to stay up to date on announcements.</p>
            <h4 class="main_FAQs_question">Q: I am going to use a freight forwarder. What happens if they can not forward the order because of a battery or other issue?</h4>
            <p class="main_FAQs_text">A: Regardless of us warning people, some people have tried to use a freight forwarder to order boards and scooters.  If your board or scooter gets rejected and returned to us, we will refund you - $200 / unit, to cover our shipping and rerouting fees. (Yes it costs us approximately $200 when your order gets rejected)</p>
            <h4 class="main_FAQs_question">Q: How about Alaska or Hawaii?</h4>
            <p class="main_FAQs_text">A: As much as we would like to ship to you, Fedex and UPS are very specific about our batteries traveling on airplanes so we can not ship to either of those states.</p>
            <h4 class="main_FAQs_question">Q: What happens to me if I already own a Boosted Board with a warranty?</h4>
            <p class="main_FAQs_text">A: We are not Boosted Boards.  Unfortunately Boosted went bankrupt and from what we've seen older warranty claims are being ignored.</p>
            <h4 class="main_FAQs_question">Q: Then who are you guys?</h4>
            <p class="main_FAQs_text">A: We are the guys who bought all of the remaining inventory from Boosted after they shut their doors.</p>
            <h4 class="main_FAQs_question">Q: What does that mean for me?  Can I still get service for my Board / Rev?</h4>
            <p class="main_FAQs_text">A: We cannot honor warranties for items bought from Boosted because they are a different company.  We can absolutely help you with service.  If there is something that you need from us, belts, chargers, advice, please feel free to reach out to us: <a class="main_FAQs_link" href="mailto:sales@boostedusa.com">info@boostedusa.com</a> and we will do the best we can to respond to you ASAP.</p>
            <h4 class="main_FAQs_question">Q: So if I have a warranty/repair issue with a board/scooter I already own I'm totally screwed?</h4>
            <p class="main_FAQs_text">A: On the one hand, yes; when Boosted went bankrupt it appears that your claims to free replacements/repairs may have gone up in smoke.  That being said, we understand the frustration you may feel and we want to do what we can to help.  Email us at <a class="main_FAQs_link" href="mailto:sales@boostedusa.com">info@boostedusa.com</a> and let us know what's going on and we'll do our best to sort you out as fairly as possible, just remember that we are a different company and had nothing to do with your original purchase so if we don't hand you a new board please don't yell at us.</p>
            <h4 class="main_FAQs_question">Q: If I buy something from you, what sort of warranty do I have?</h4>
            <p class="main_FAQs_text">A: We have a limited 60 day warranty for everything you receive.  This covers you for manufacturers defects out of the box. If you receive a product that you believe is defective please contact us immediately and do not use your product. Please include your serial number (if applicable) and a photo or video demonstrating the problem and email it to: <a class="main_FAQs_link" href="mailto:sales@boostedusa.com">info@boostedusa.com</a>. If we decide your issue needs inspection or replacement we will provide you with an RA number that must be attached to any items shipped back to us.</p>
            <h4 class="main_FAQs_question">Q: I need a replacement part that I don't see on your site.</h4>
            <p class="main_FAQs_text">A. That's not a question but you should know that we're continuing to receive boxes of goods and as we find items we will be adding them to our website for sale.  Please keep an eye on the site in the coming weeks.</p>
            <h4 class="main_FAQs_question">Q. Will you be receiving more 105 wheels and/or Beams?</h4>
            <p class="main_FAQs_text">A. We hope so but again, we're unboxing products as fast as we can.  We expect to see more of these items and we will add them to the site as soon as we do.  In the meantime make sure to add your email to the "notify me" box and you'll get an email as soon as more stock is added.</p>
            <h4 class="main_FAQs_question">Q. I have an existing Boosted product with an issue.  Can you help me repair it?</h4>
            <p class="main_FAQs_text">A. If you have a Rev, yes! To get advice on how to fix an issue with your Rev, for assistance figuring out what part you need, or to start a repair ticket, please contact our service department at <a class="main_FAQs_link" href="mailto:sales@boostedusa.com">info@boostedusa.com</a>. Please attach any relevant videos or photos showing your issue so the specialists can best assist you. Unfortunately, we're not able to repair boards, however we are able to provide you with pointers and sell you spare parts that will get your board up and going. Please email us and we'll do our best to help you out.</p>
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