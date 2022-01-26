<?php
$userId = (int) trim(strip_tags($_GET['userId'])); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/style_top.css">
    <link rel="stylesheet" href="../style/style_shipping.css">
    <title>shipping</title>
</head>
<body>
<?php include_once "../templates/menu_header.php"; ?>
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
        <div class="main_line"></div>
    <div class="main_footer"></div>
    </main>
    <?php include_once "../templates/footer.php"; ?>
</body>
</html>