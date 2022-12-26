<?php include "inc/header2.php"; ?>
<?php require "functions/validation.php" ?>


        <?php
        $db = new db();
        if (isset($_POST['submit'])) {
            $email = $_POST['email'];
            $password = $_POST['password'];


            if (cheakvalue($email) && cheakvalue($password)) {

                if (ValidEmail($email)) {

                    $check = $db->getRow('users', 'email', $email);

                    $check_password = password_verify($password, $check['password']);

                    if ($check_password) {
                        $_SESSION['userf_name'] = $check['first_name'];
                        $_SESSION['userl_name'] = $check['last_name'];
                        $_SESSION['user_email'] = $check['email'];
                        $_SESSION['id'] = $check['id'];
                        header("location:index.php");
                    }


                } else {
                    $error = "Type Correct Email"; ?>
                    <div class="col-sm-6 offset-sm-3 border p-3 mt-3">
                    <h3 class="alert alert-danger text-center"> <?php echo $error; ?>  </h3>
                    </div><?php
                }
            } else {
                $error = "Please Fill All Fields";
                ?>
                <div class="col-sm-6 offset-sm-3 border p-3 mt-3">
                    <h3 class="alert alert-danger text-center"> <?php echo $error; ?> </h3>
                </div>
                <?php
            }
        }

        ?>

        <div class="back bg-white p-3 border-0 d-flex justify-content-between">
            <a href="index.php">
                <i class="fa fa-backward text-black ms-md-5"></i>
                <span class="fw-bold fs-4 ms-2 text-black">Home</span><span class="text-black-50 fs-5"> > LOGIN</span>
            </a>
        </div>
        <div id="mainpage" class=" container  py-5">

            <div class="signIncontent m-auto p-md-5 p-4">
                <div class="text-center">
                    <h1> LOGIN </h1>
                </div>
                <form   method="POST" action="<?php echo $_SERVER['PHP_SELF'] ?>">
                    <input id="signinEmail" class="text-black form-control mt-4 my-4" name="email" placeholder="Your email" type="email">
                    <input id="signinPassword" class="text-black form-control my-4" name="password" placeholder="Your password" type="password">
                    <div class="text-center">
                    <button type="submit" name="submit" class="btn btn-success">Login</button>
                         
                    </div>
                </form>

                <div class="text-center">
                    <p>Don’t have an account? <a href="signUP.php">SignUp</a></p>
                </div>
            </div>
        </div>
        
        <footer class="bottom-0 position-fixed bg-white">
            <div class="container text-center text-black">
                <p class="mb-0">© Online Store. All Rights Reserved</p>
                <p>Created by Frontend Team</p>
            </div>
        </footer>
    </div>

    <script src="assets/js/jquery-3.6.1.min.js"></script>

    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/index.js"></script>

</body>