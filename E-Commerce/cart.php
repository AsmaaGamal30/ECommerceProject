<?php require "config.php"; ?>
<?php require 'inc/header.php'; ?>
<?php include "inc/sidebar.php";
?>

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

    <?php
    $db = new db();
    if (isset($_POST['delete'])) {
        $delete = $db->deleteFrom($_POST['product_id'], "carts");
    }


    $allProducts = $db->getAll("carts");
    foreach ($allProducts as $product) :
        $fav = $db->getAllFrom("products", "id", $product['product_id']);
        array_map(function ($product) {
            $sum = 0;
            global $sum;
    ?>

            <div class="box-container">

                <div class="box">


                    <img src="<?php echo $product['img'] ?>" alt="">
                    <div class="content">
                        <h3><?php echo $product['name'] ?></h3>
                        <form action="" method="post">
                            <input type="hidden" name="product_id" value="<?php echo $product['id'] ?>">
                            <button name="delete"><i class="fas fa-times"> </i></button>
                            <span>quantity : 1</span>
                        </form>
                        <div class="price">
                            <?php
                            echo $product['price'];
                            $sum += $product['price'];
                            ?> </div>
                    </div>
                </div>

            </div>
    <?php
        }, $fav);
    endforeach;
    ?>
    <div class="cart-total">
        <h3> subtotal : <span><?php echo  $sum ?? 0; ?> EGP</span> </h3>

        <form action="" method="post">
            <button><a href="buypage.php">checkout</a></button>
        </form>
    </div>


    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>


</section <!-- shopping cart section ends -->
















<!-- footer section starts  -->
<?php require "inc/footer.php" ?>