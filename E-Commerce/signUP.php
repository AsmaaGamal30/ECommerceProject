<?php include "inc/header2.php"; ?>
<?php require "functions/validation.php" ?>

        <div class="back bg-white border-0 p-3 d-flex justify-content-between">
            <a href="index.php">
                <i class="fa fa-backward text-black ms-md-5"></i>
                <span class="fw-bold fs-4 ms-2 text-black">Home</span><span class="text-black-50 fs-5 text-uppercase"> > Registration</span>
            </a>
        </div>


        <?php
        $db = new db();
        if (isset($_POST['submit'])) {

            $lname = $_POST['lname'];
            $fname = $_POST['fname'];
            $password = $_POST['password'];
            $email = $_POST['email'];
            $number = $_POST['number'];
            if (cheakvalue($lname) && cheakvalue($fname) && cheakvalue($password) && cheakvalue($email) && cheakvalue($number)) {
                $hash_pass = password_hash($password, PASSWORD_DEFAULT);
                $sql = "INSERT INTO `users`(`first_name` ,`last_name`,`phone`,`email`,`password`) VALUES ( '$fname','$lname','$number','$email','$hash_pass')";
                $success = $db->db_insert($sql);
                header("Location: login.php");

            } else {
                $errors = "Please fill filed";

            }
            require 'functions/message.php';
        }
        ?>

        <div id="signuppage" class="my-2 mt-md-0 container">

            <div class="signIncontent m-auto p-md-5 p-4">
                <div class="text-center">
                    <h1> SIGNUP </h1>
                </div>
                <form method="post" action="<?php  echo $_SERVER['PHP_SELF']?>">
                    <label for="signupFName" class="mt-2">First Name</label>
                    <input class="text-black form-control my-2" name="fname" id="signupFName" type="text">

                    <label for="signupLName">Last Name</label>
                    <input class="text-black form-control my-2" name="lname" id="signupLName" type="text">

                    <label for="signupEmail">Your Email</label>
                    <input class="text-black form-control my-2" name="email" id="signupEmail" type="email">

                    <label for="signupphone">Your Number</label>
                    <input class="text-black form-control my-2" name="number" id="signupphone" type=" tel ">

                    <label for="signupPassword">Your Password</label>
                    <input id="signupPassword " name="password" class="text-black form-control my-2 " type="password">

                    <div class="text-center">
                    <button type="submit" name="submit" class="btn btn-success">Register</button>
                    </div>

                </form>
                <div class="text-center">
                    <p>You have an account? <a href="login.php ">SignIn</a></p>
                </div>


            </div>

        </div>
        <footer class="bottom-0 bg-white ">
            <div class="container text-center text-black ">
                <p class="mb-0 ">© Online Store. All Rights Reserved</p>
                <p>Created by Frontend Team</p>
            </div>
        </footer>
    </div>

    <script src="<?php echo ASSETS; ?>js/jquery-3.6.1.min.js "></script>
    <script src="<?php echo ASSETS; ?>js/bootstrap.bundle.min.js "></script>
    <script src="<?php echo ASSETS; ?>js/index.js "></script>

</body>