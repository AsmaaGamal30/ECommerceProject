
<div class="row g-3 py-3 ">
    <?php foreach ($allProducts as $product) : ?>
        <div class="col-md-4 col-lg-2 col-6">
            <div class="card">
                <a href="<?php printf('%s?id=%s', 'product.php', $product['id']); ?>">
                    <img src="<?php echo $product['img'] ?>" class="card-img-top" alt="...">
                </a>
                <?php if(isset($_SESSION['id'])): ?>
                <form method="post">
                    <input type="hidden" name="user_id" value ="<?php echo $_SESSION['id']?>">
                    <input type="hidden" name="product_id" value="<?php echo $product['id']?>">
                    <button type="submit" name="fav" class="border-0"><i class="fa fa-heart red black"></i></button>
                </form >
                <?php endif; ?>
                <?php if(!isset($_SESSION['id'])): ?>
                <form method="post" action="./login.php">
                    <button type="submit" name="fav" class="border-0"><i class="fa fa-heart red black"></i></button>
                </form >
                <?php endif; ?>
                <div class="card-body">
                    <b class="card-text m-0"><?php echo $product['name'] ?></b>
                    <p><?php echo $product['color'] ?></p>
                    <h5 class="card-title m-0"><?php echo $product['price'] ?></h5>
                </div>
            </div>

        </div>
    <?php endforeach; ?>
</div>