<?php require "config.php"; ?>
<?php include "functions/db.php" ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Store | products</title>
    <link rel="icon" href="<?php echo ASSETS; ?>images/logo-removebg-preview%20(1).png">
    <link rel="stylesheet" href="<?php echo ASSETS; ?>css/all.css">
    <link rel="stylesheet" href="<?php echo ASSETS; ?>css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo ASSETS; ?>css/style.css">
</head>

<body>
    <div class="spiner">
        <span class="loader"></span>
    </div>

    <section id="mainPage">

        <nav class="py-2 fixed-top">
            <div class=" container w-75 mx-auto">
                <div class=" row py-1 d-flex justify-content-between  align-items-center ">
                    <div class="col-md-3 col-9 d-flex mt-1 logo">
                        <i class="fas fa-store text-warning"></i>
                        <div class="d-flex flex-column ">
                            <a href="index.php">
                                <h4 class="mb-0 fs-3 fw-bolder"> Store</h4>
                            </a>
                        </div>

                    </div>

                    <!-- <?php include "inc/searchBar.php"; ?> -->

                    <div class="col-md-3" id="ulCard">
                        <ul class="navbar-nav">
                            <?php if (!isset($_SESSION['userf_name'])) : ?>
                                <li class="nav-item ">
                                    <a class="nav-link " aria-current="page " href="login.php"><i class="fas fa-user"></i></a>
                                </li>
                            <?php endif; ?>
                            <?php if (isset($_SESSION['userf_name'])) : ?>
                                <li class="nav-item ">
                                    <a class="nav-link " aria-current="page " id="cart" href="cart.php"><span><i class="fas fa-shopping-cart"></i></span></a>
                                </li>
                                <li class="nav-item ">
                                    <a class="nav-link " aria-current="page " id="favorite" href="favourite.php"><span><i class="fa-solid position-relative fa-heart top-0 end-0 "></i></span></a>
                                </li>
                            <?php endif; ?>
                            <?php if (!isset($_SESSION['userf_name'])) : ?>
                                <li class="nav-item ">
                                    <a class="nav-link " aria-current="page " id="cart" href="login.php"><span><i class="fas fa-shopping-cart"></i></span></a>
                                </li>
                                <li class="nav-item ">
                                    <a class="nav-link " aria-current="page " id="favorite" href="login.php"><span><i class="fa-solid position-relative fa-heart top-0 end-0 "></i></span></a>
                                </li>

                            <?php endif; ?>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>