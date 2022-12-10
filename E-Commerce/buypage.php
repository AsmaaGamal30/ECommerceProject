<?php include "inc/header2.php"; ?>
    <div class="back bg-white p-3 border-0 d-flex justify-content-between">
        <a href="index.php">
            <i class="fa fa-backward  text-black ms-md-5"></i>
            <span class="fw-bold fs-4 ms-2 text-black">Home</span><span class="text-black-50 fs-5"> > Continue to buy</span>
        </a>

    </div>
    <div class="container mx-auto py-3">
        <h1 class="fw-bold pb-2">Continue to Buy</h1>
        <form action="" method="">
        <div class="py-3">
            <div class="d-flex align-items-center justify-content-between">
                <label for="FirstName">First_Name</label>
                <input class="text-black form-control my-2 w-75" id="FirstName" type="text">
            </div>
            <div class="d-flex align-items-center justify-content-between">
                <label for="lastName">Last_Name</label>
                <input class="text-black form-control my-2 w-75" id="lastName" type="text">
            </div>

            <div class="d-flex align-items-center justify-content-between">
                <label for="email">Your_Email</label>
                <input class="text-black form-control my-2 w-75" id="email" type="email">
            </div>
            <div class="d-flex align-items-center justify-content-between">
                <label for="number">Your_Number</label>
                <input class="text-black form-control my-2 w-75" id="number" type="tel">
            </div>
            <div class="d-flex align-items-center justify-content-between">
                <label for="Address">Add Your Address</label>
                <input class="text-black form-control my-2 w-75" id="Address" type="text">
            </div>
            <div class="d-flex align-items-center justify-content-between">
                <label for="numberCard">Number Of Card</label>
                <input class="text-black form-control my-2 w-75" id="numberCard" type="number">
            </div>
            <div class="d-flex align-items-center justify-content-between">
                <label for="card">Card Number</label>
                <input class="text-black form-control my-2 w-25" id="card" placeholder="Expiry Date" type="text">
                <input class="text-black form-control my-2 w-25" id="card" placeholder="Security Code" type="text">
            </div>

            <div class="d-flex align-items-center justify-content-between">
                <label for="Postal">Zip/Postal Code</label>
                <input class="text-black form-control my-2 w-75 ms-3" id="Postal" type="number">
            </div>
            <div class="text-center">
                <button id="Continue" class="btns w-25 my-3">Continue</button>
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