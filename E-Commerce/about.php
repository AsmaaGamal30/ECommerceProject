<?php
require 'config.php';
require "inc/header.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Store | About</title>
    <link rel="icon" href="<?php echo ASSETS; ?> images/logo-removebg-preview%20(1).png">
    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="<?php echo ASSETS; ?>css/all.css">

    <!-- swiper css link  -->
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <!-- cusom css file link  -->
    <link rel="stylesheet" href="<?php echo ASSETS; ?>css/contact,cart.css">

</head>

<body>



<?php
require "inc/sidebar.php";
?>



<!-- about section starts  -->
<section class="about">

    <div class="image">
        <img src="<?php echo ASSETS; ?>images/about-img.png" alt="">
    </div>

    <div class="content">
        <h3>our story</h3>
        <p>We are five software engineers we think together to do this E-commerce website for make the shopping process easy for you and we do hard to make it in this way to buy what you want from your place </p>
        <p> finally we hope you like our website </p>
        <p>happy shopping</p>
        <a href="#" class="btn">read more</a>
    </div>

</section>

<!-- about section ends -->

<!-- faq section starts  -->

<section class="faq">

    <h1 class="heading"> questions & <span>answers</span> </h1>

    <div class="accordion-container">

        <div class="accordion">
            <div class="accordion-heading">
                <h3>how to make websites?</h3>

            </div>
            <p class="accordioin-conten">
                <span><i class="fas fa-angle-right"></i></span> it is so easy just contact with us from contact page and we will tell you everything with recommended cour.
            </p>
        </div>

        <div class="accordion">
            <div class="accordion-heading">
                <h3>how time you take to receive order?</h3>
            </div>
            <p class="accordioin-conten">
                <span><i class="fas fa-angle-right"></i></span> at least we take from 3 days to 5.
            </p>
        </div>

        <div class="accordion">
            <div class="accordion-heading">
                <h3>how to pay online?</h3>
            </div>
            <p class="accordioin-conten">
                <span><i class="fas fa-angle-right"></i></span> we have two ways to pay one of them online when you choose pay through you card .
            </p>
        </div>

        <div class="accordion">
            <div class="accordion-heading">
                <h3>is online payment safe?</h3>

            </div>
            <p class="accordioin-conten">
                <span><i class="fas fa-angle-right"></i></span> yes do not worry we safe all your information with our security team.
            </p>

        </div>

</section>

<!-- faq section ends -->

<!-- review section starts  -->

<section class="review">

    <h1 class="heading"> clients <span>review</span> </h1>

    <div class="swiper review-slider">

        <div class="swiper-wrapper">

            <div class="swiper-slide slide">
                <img src="<?php echo ASSETS; ?>images/pic-1.png" alt="">
                <h3>john deo</h3>
                <span>dr</span>
                <p>i love this website so much and everything i want i found in easy way.</p>
            </div>

            <div class="swiper-slide slide">
                <img src="<?php echo ASSETS; ?>images/pic-2.png" alt="">
                <h3>lela ali</h3>
                <span>Eng</span>
                <p> it is so good and my order deliver quickly</p>
            </div>

            <div class="swiper-slide slide">
                <img src="<?php echo ASSETS; ?>images/pic-3.png" alt="">
                <h3> saly ahmed </h3>
                <span>teacher</span>
                <p> i am so happy to find this website it is so easy to use and everything is so perfect</p>
            </div>

            <div class="swiper-slide slide">
                <img src="<?php echo ASSETS; ?>images/pic-4.png" alt="">
                <h3>Nahla</h3>
                <span>designer</span>
                <p>thanks alot for a quick service </p>
            </div>

            <div class="swiper-slide slide">
                <img src="<?php echo ASSETS; ?>images/pic-5.png" alt="">
                <h3>Abdelrahman</h3>
                <span>doctor</span>
                <p> it is so easy website and i love it .</p>
            </div>


        </div>

    </div>

</section>


<!-- footer section starts  -->
<!---->
<!--<section class="quick-links">-->
<!---->
<!--    <a href="index.php" class="logo"> <i class="fas fa-store"></i> Store </a>-->
<!---->
<!--    <div class="links">-->
<!--        <a href="index.php"> home </a>-->
<!--        <a href="about.php"> about </a>-->
<!--        <a href="products.php"> products </a>-->
<!--        <a href="contact.php"> contact </a>-->
<!--        <a href="cart.php"> cart </a>-->
<!--    </div>-->
<!---->
<!--    <div class="share">-->
<!--        <a href="#" class="fab fa-facebook-f"></a>-->
<!--        <a href="#" class="fab fa-twitter"></a>-->
<!--        <a href="#" class="fab fa-instagram"></a>-->
<!--        <a href="#" class="fab fa-linkedin"></a>-->
<!--    </div>-->
<!---->
<!--</section>-->
<!--</body>-->
<!--</html>-->
<?php  require "inc/footer.php"?>

