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
            <div class="col-6 col-lg-2">
                <a class="nav-link " aria-current="page" id="mopile" href="mopPage.php"><span><i class="fa-solid fa-mobile-screen-button"></i></span> MOBILES </a>
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
<section id="productPage">

    <?php
    $id = $_GET['id']??4;
    $db = new db();
    $product = $db->getAll("products");
    $allCart = $db->getAll("carts");
    $get_id = $db->getID($allCart);
    foreach ($product as $item):
    if ($item['id'] == $id):
    ?>
    <div class="container my-5">
        <div class="row">
            <div class="col-md-6">
                <img src="<?php echo $item['img']; ?>" alt="">
            </div>

            <div class="col-md-6 pt-md-2 mt-5 mt-md-0">
                <div class="py-md-5">
                    <div class=" border-bottom mb-4 ">
                        <h2><b><?php echo $item['name']; ?></b></h2>
                        <p><?php echo $item['description'];?></p>

                    </div>
                    <h4><b>Color : </b><span class="text-black-50"><?php echo $item['color']; ?></span></h4>
                    <h4 class="py-2"><b>Size   : </b><?php echo $item['size']; ?></h4>
                    <h4><b class="text-black">Price : </b> <span id="price"><?php echo $item['price'] ;?> EGP</span></h4>
                    <br>

                    <?php if(!isset($_SESSION['id'])): ?>
                    <form action="login.php" method="post">
                    <button type="submit" name="order" class="mt-3 addbtn text-center fs-5">Add to Cart</button>
                    </form>
                    <?php endif; ?>
                    
                    <?php if(isset($_SESSION['id'])): ?>
                    <form action="" method="post">
                        <?php
                        if(in_array($item['id'],$get_id ?? [])){
                            echo '<button type="submit" disabled class="mt-3 btn btn-success text-center fs-5">In the Cart</button>';
                        }
                        else{
                            echo '<button type="submit" name="add" class="mt-3 addbtn text-center fs-5">Add to Cart</button>';
                        }

                        ?>
                    

                    </form>
                    <?php endif; ?>
                    
                </div>
            </div>
        </div>
    </div>
    <?php
      
       $db = new db();
       $allProducts = $db->getAll("carts");
       if (isset($_POST['add']))
        {
           $cartProducts = $db->addTo($_SESSION['id'], $item['id'],"carts");
       }  
       
    endif;
    endforeach;
    ?>
    
  
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