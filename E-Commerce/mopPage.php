<?php include "inc/header2.php"; ?>

    <div class="category fixed-top bg-white">
        <div class="container py-3 row">
            <div class="col-lg-1 col-0"></div>
            <div class="col-4  col-lg-2">
                <a class="nav-link" aria-current="page " id="all" href="products.php">
                    <span><i class="fa-solid fa-image"></i></span> All</a>
            </div>
            <div class="col-4 col-lg-2">
                <a class="nav-link" aria-current="page " id="men" href="menPage.php"><span><i class="fa-sharp fa-solid fa-person"></i></span> MEN</a>

            </div>
            <div class="col-4 col-lg-2">
                <a class="nav-link " aria-current="page " id="women" href="womenPage.php"><span><i class="fa-solid fa-person-dress"></i></span> WOMEN</a>

            </div>
            <div class="col-6 col-lg-2">
                <a class="nav-link " aria-current="page" id="laptop" href="laptopPage.php"><span><i class="fa-solid fa-laptop"></i></span> LAPTOPS </a>

            </div>
            <div class="col-6 col-lg-2 text-warning">
                <a class="nav-link " aria-current="page" id="mopile" href="mopPage.php"><span><i class="text-warning fa-solid fa-mobile-screen-button"></i></span> MOBILES </a>
            </div>
            <div class="col-lg-1 col-0"></div>
        </div>
    </div>
</section>

<br>
<br>
<br>
<br>
<br>
<br>


<section id="mopilePage">

    <?php
    $db = new db();
    $allProducts = $db->getAllFrom("products", "category_id", 4);
    if (isset($_POST['fav']))
    {
       $favProducts = $db->addTo($_POST['user_id'], $_POST['product_id'],"favourites");
   }
    ?>
    <div class="bg-white p-3 d-flex justify-content-between">
        <a>
            <i class="fa fa-backward text-black ms-md-5"></i>
            <span class="fw-bold fs-5 ms-2 text-black">PRODUCTS</span><span class="text-black-50 fs-5"> > MOPILES</span>
        </a>
    </div>
    <div class="allContain">

        <!-- product item goes here -->
        <?php include "inc/productItem.php" ?>
        
</section>





<footer>
    <div class="container text-center">
        <p class="mb-0">© Online Store. All Rights Reserved</p>
        <p>Created by Frontend Team</p>
    </div>
</footer>
<script src="assets/js/jquery-3.6.1.min.js "></script>
<script src="assets/js/bootstrap.bundle.min.js "></script>
<script src="assets/js/index.js"></script>
</body>

</html>
