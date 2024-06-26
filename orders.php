<?php
require_once "php/mainLogCheck.php";
require_once "php/connectdb.php";

if (!$b) {
    header("Location: login.php");
    exit;
}

//Used for past_orders_template.php
$username = $_SESSION['username'] ?? null;

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Petopia</title>
    <link href="css/orders.css" rel="stylesheet" type="text/css">
    <link href="css/navigation.css" rel="stylesheet" type="text/css">
    <link href="css/footer.css" rel="stylesheet" type="text/css">
    <!--[Google Fonts]-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <!--Nunito Font-->
    <link
        href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,700;1,800&family=Work+Sans:wght@700;800&display=swap"
        rel="stylesheet">

    <!--Box Icons-->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <!--
        [Navigation & Footer]
        -->
    <script src="templates/navigationTemplate.js"></script>
    <link href="css/navigation.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="css/footer.css">

    <!--Flickity-->
    <!--CSS Templates-->
    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
    <link rel="stylesheet" href="templates/hero-banner.css">
    <!--JS-->
    <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>

</head>

<body>
    <!--
        [NAVIGATION/HEADER]
    -->
    <header></header>
    <!--
        [HEADER/NAVIGATION END]
    -->

    <!--Hero Banner-->
    <section class="hero-banner">
        <!--Hero Banner Image-->
        <div class="hero-banner-image"><img src="assets/Homepage/hero-banner2.jpg" alt=""></div>

        <!--Hero Banner Text Container-->
        <div class="hero-banner-left">

            <div class="hero-banner-content">
                <h2>Orders</h2>
                <p>Your orders; all in one place</p>
            </div>
        </div>
    </section>
    
    <!--Section for order content-->
    <section class="main-content">
        <h2 class="order-summary-heading">Previous Orders</h2>
        <div class="order-template-container">
            <?php require_once('php/past_orders_template.php');?>
        </div>
    </section>

    <footer>
        &copy; 2023 Petopia
    </footer>
</body>

</html>
