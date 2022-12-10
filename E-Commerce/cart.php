<?php require "config.php";?>
<?php require 'inc/header.php';?>
<?php include "inc/sidebar.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Store | Cart</title>
    <link rel="icon" href="<?php echo ASSETS; ?>images/logo-removebg-preview%20(1).png">
    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="<?php echo ASSETS; ?>css/all.css">

    <!-- swiper css link  -->
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <!-- cusom css file link  -->
    <link rel="stylesheet" href="<?php echo ASSETS; ?>css/contact,cart.css">

</head>

<!-- side-bar section ends -->

<!-- shopping cart section starts  -->

<section class="shopping-cart">

    <h1 class="heading">your <span>products</span></h1>

    <div class="box-container">

        <div class="box">

            <button><i class="fas fa-times"></i></button>
            <img src="<?php echo ASSETS; ?>images/mopiles/8.jpg" alt="">
            <div class="content">
                <h3>smartphone</h3>
                <form action="">
                    <span>quantity : </span>
                    <input type="number" name="" value="1" id="">
                </form>
                <div class="price">249.99EGP <span>399.99</span></div>
            </div>
        </div>

    </div>

    <div class="cart-total">
        <h3> subtotal : <span>1499.94EGP</span> </h3>
        <h3> discount : <span>-99.94EGP</span> </h3>
        <h3> subtotal : <span>1400.00EGP</span> </h3>
        <button><a href="buypage.php">checkout</a></button>
    </div>

</section
<!-- shopping cart section ends -->
















<!-- footer section starts  -->
<?php require "inc/footer.php"?>