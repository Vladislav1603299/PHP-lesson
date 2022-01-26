<?php
$userId = (int) trim(strip_tags($_GET['userId'])); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/style_top.css">
    <link rel="stylesheet" href="../style/style_FAQs.css">
    <title>FAQs</title>
</head>
<body>
<?php include_once "../templates/menu_header.php"; ?>
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
        <div class="main_line"></div>
    <div class="main_footer"></div>
    </main>
    <?php include_once "../templates/footer.php"; ?>
</body>
</html>