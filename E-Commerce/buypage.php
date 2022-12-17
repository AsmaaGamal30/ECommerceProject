<?php include "inc/header2.php"; ?>
    <div class="back bg-white p-3 border-0 d-flex justify-content-between">
        <a href="index.php">
            <i class="fa fa-backward  text-black ms-md-5"></i>
            <span class="fw-bold fs-4 ms-2 text-black">Home</span><span class="text-black-50 fs-5"> > Continue to buy</span>
        </a>

    </div>
    <div class="container mx-auto py-3">
        <h1 class="fw-bold pb-2">Continue to Buy</h1>
        <?php
        $db = new db();
        if(isset($_POST['buy']))
        {
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $email = $_POST['email'];
        $number = $_POST['number'];
        $address = $_POST['address'];
        $number_of_card = $_POST['number_of_cart'];
        $expiry_date = $_POST['expiry_date'];
        $security_code = $_POST['security_code'];
        $postal_code = $_POST['postal_code'];
        $user_id = $_SESSION['id'];
        $sql = "INSERT INTO `payment`(`first_name`,`last_name`,`email`,`phone`,`address`,`number_of_card`,`expiry_date`,`security_code`,`postal_code`,`user_id`) VALUES ('$first_name','$last_name','$email','$number','$address','$number_of_card','$expiry_date','$security_code','$postal_code','$user_id')";
        $success = $db->db_insert($sql);
        if($success)
        {
            $query = 
            "INSERT INTO `orders`(`user_id`,`product_id`,`payment_id`)
            SELECT carts.user_id ,carts.product_id , payment.id
            FROM `carts`
            INNER JOIN `payment`
            ON carts.user_id = payment.user_id";
            $successQuery = $db->db_insert($query);
        }
        if($successQuery)
        {
            $deleteSQL = "DELETE FROM `carts` WHERE `user_id` = $user_id";
            $successSQL =$db->db_insert($deleteSQL);
        }
        if($successSQL){
            header("Location: products.php");
        }

        }


        ?>


        <form action="" method="post">
        <div class="py-3">
            <div class="d-flex align-items-center justify-content-between">
                <label for="FirstName">First Name</label>
                <input class="text-black form-control my-2 w-75" id="FirstName" type="text" name="first_name">
            </div>
            <div class="d-flex align-items-center justify-content-between">
                <label for="lastName">Last Name</label>
                <input class="text-black form-control my-2 w-75" id="lastName" type="text" name="last_name">
            </div>

            <div class="d-flex align-items-center justify-content-between">
                <label for="email">Your Email</label>
                <input class="text-black form-control my-2 w-75" id="email" type="email" name="email">
            </div>
            <div class="d-flex align-items-center justify-content-between">
                <label for="number">Your Number</label>
                <input class="text-black form-control my-2 w-75" id="number" type="tel" name="number">
            </div>
            <div class="d-flex align-items-center justify-content-between">
                <label for="Address">Add Your Address</label>
                <input class="text-black form-control my-2 w-75" id="Address" type="text" name="address">
            </div>
            <div class="d-flex align-items-center justify-content-between">
                <label for="numberCard">Number Of Card</label>
                <input class="text-black form-control my-2 w-75" id="numberCard" type="text" name="number_of_cart">
            </div>
            <div class="d-flex align-items-center justify-content-between">
                <label for="card">Card Number</label>
                <input class="text-black form-control my-2 w-25" id="card" placeholder="Expiry Date" type="text" name="expiry_date">
                <input class="text-black form-control my-2 w-25" id="card" placeholder="Security Code" type="text" name="security_code">
            </div>

            <div class="d-flex align-items-center justify-content-between">
                <label for="Postal">Zip/Postal Code</label>
                <input class="text-black form-control my-2 w-75 ms-3" id="Postal" type="text" name="postal_code">
            </div>
            <div class="text-center">
                <button id="Continue" class="btns w-25 my-3" name="buy">Buy</button>
            </div>
        </div>
        </form>
    </div>


</section>
<footer class="bottom-0 bg-white">
    <div class="container text-center text-black">
        <p class="mb-0">© Online Store. All Rights Reserved</p>
        <p>Created by Frontend Team</p>
    </div>
</footer>
<script src="<?php echo ASSETS; ?>js/jquery-3.6.1.min.js "></script>
<script src="<?php echo ASSETS; ?>js/bootstrap.bundle.min.js "></script>
<script src="<?php echo ASSETS; ?>js/index.js "></script>
</body>

</html>