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
    <title>Online Store | Contact</title>
    <link rel="icon" href="<?php echo ASSETS; ?>images/logo-removebg-preview%20(1).png">

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- swiper css link  -->
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <!-- cusom css file link  -->
    <link rel="stylesheet" href="<?php echo ASSETS; ?>css/contact,cart.css">

</head>

<body>



    <?php
    require "inc/sidebar.php";
    ?>

    </div>

    <!-- side-bar section ends -->

    <!-- contact info section starts -->

    <section class="info-container">

        <div class="box-container">

            <div class="box">
                <i class="fas fa-map"></i>
                <h3>address</h3>
                <p>alex, cairo - 400104</p>
            </div>

            <div class="box">
                <i class="fas fa-envelope"></i>
                <h3>email</h3>
                <p>nermeenelsheikh1@gmail.com</p>

            </div>

            <div class="box">
                <i class="fas fa-phone"></i>
                <h3>number</h3>
                <p>+123-456-7890</p>
            </div>

        </div>

    </section>

    <!-- contact info section ends -->

    <!-- contact section starts  -->

    <?php
    $db = new db();
    if (isset($_POST['contact'])) {

        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];
        $sql = "INSERT INTO `contact`(`name` ,`email`,`phone`,`subject`,`message`) VALUES ( '$name','$email','$phone','$subject','$message')";
        $success = $db->db_insert($sql);
    }
    ?>

    <section class="contact">
        <div class="center">
            <h3>get in touch</h3>
            <p>it is pleasure to contact with us</p>
        </div>
        <div class="flex">
            <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">

                <div class="inputBox">
                    <input type="text" name="name" placeholder="your name">
                    <input type="email" name="email" placeholder="your email">
                </div>
                <div class="inputBox">
                    <input type="number" name="phone" placeholder="your number">
                    <input type="text" name="subject" placeholder="subject">
                </div>
                <textarea name="message" placeholder="your message" id="" cols="30" rows="10"></textarea>
                <input type="submit" name="contact" value="send message" class="btn">
            </form>

            <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d218359.68532197058!2d30.09497316510505!3d31.224328547656224!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14f5c49126710fd3%3A0xb4e0cda629ee6bb9!2z2KfZhNil2LPZg9mG2K_YsdmK2Kk!5e0!3m2!1sar!2seg!4v1669746844710!5m2!1sar!2seg" allowfullscreen="" loading="lazy"></iframe>
        </div>
    </section>

    <!-- contact section ends -->

    <!-- footer section starts  -->




    <?php
    include "inc/footer.php";
    ?>

</body>

</html>