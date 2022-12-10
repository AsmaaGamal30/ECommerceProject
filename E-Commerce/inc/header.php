<?php include "functions/db.php" ?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Store</title>
    <link rel="icon" href="<?php echo ASSETS; ?>images/logo-removebg-preview%20(1).png">
    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="<?php echo ASSETS; ?>css/all.css">

    <!-- swiper css link  -->
    <link rel="stylesheet" href=" https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <!-- cusom css file link  -->
    <link rel="stylesheet" href="<?php echo ASSETS; ?>css/contact,cart.css">

</head>

<body>

<!-- header section starts  -->

<header class="header">

    <a href="./index.php" class="logo"> <i class="fas fa-store"></i> Store </a>
    <?php include "searchBar2.php"; ?>

    <div class="icons">
        <div id="menu-btn" class="fas fa-bars"></div>
        <div id="search-btn" class="fas fa-search"></div>
        <?php if (!isset($_SESSION['userf_name'])) : ?>
        <a href="./login.php" class="fas fa-user"></a>
        <?php endif; ?>
        <?php if(isset($_SESSION['userf_name'])) : ?>
        <a href="./favourite.php" class="fas fa-heart"></a>
        <a href="./cart.php" class="fas fa-shopping-cart"></a>
        <?php endif;?>
        <?php if(!isset($_SESSION['userf_name'])) :?>
        <a href="./login.php" class="fas fa-heart"></a>
        <a href="./login.php" class="fas fa-shopping-cart"></a>
        <?php endif; ?>
    </div>

</header>

