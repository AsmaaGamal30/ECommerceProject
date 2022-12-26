<?php
include "inc/header2.php";
?>
<div class="back bg-white p-3 border-0 d-flex justify-content-between">
    <a href="index.php">
        <i class="fa fa-backward text-black ms-md-5"></i>
        <span class="fw-bold fs-4 ms-2 text-black">Home</span><span class="text-black-50 fs-5"> > FAVORITE</span>
    </a>


</div>
<div class="container pb-5">
    <div class="py-3">
        <div class="row d-flex align-items-center gx-2" id="fav">

            <?php
            $db = new db();
            if(isset($_POST['delete'])){
                $delete = $db->deleteFrom($_POST['product_id'],"favourites");
            }
            $allProducts = $db->getAll("favourites");
            foreach ($allProducts as $product) :
                $fav = $db->getAllFrom("products","id",$product['product_id']);
                array_map(function ($product) {
            ?>

                    <div class="col-md-6 col-lg-4 mb-2">
                        <div class="card">
                            <img src="<?php echo $product['img'] ?>" class="card-img-top" alt="...">
                            <i class="fa fa-heart text-danger"></i>
                            <div class="card-body">
                                <b class="card-text m-0"><?php echo $product['name'] ?></b>
                                <p><?php echo $product['color'] ?></p>
                                <h5 class="card-title m-0"><?php echo $product['price'] ?> EGP</h5>
                            </div>
                            <form action="" method="post">
                                <input type="hidden" name="product_id" value="<?php echo $product['id'] ?>">
                                <button id="deleteProduct" type="submit" name="delete" class="m-1">Delete From Favorite</button>
                            </form>
                        </div>
                    </div>

            <?php
                }, $fav);
            endforeach;
            ?>
        </div>
        </section>

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
    <br>
    <br>
    <br>
    <br>
    <br>
   

        <footer>
            <div class="container text-center">
                <p class="mb-0">© Online Store. All Rights Reserved</p>
                <p>Created by Frontend Team</p>
            </div>
        </footer>
        <script src="assets/js/jquery-3.6.1.min.js "></script>
        <script src="assets/js/bootstrap.bundle.min.js "></script>
        <script src="assets/js/index.js "></script>
        </body>

        </html>