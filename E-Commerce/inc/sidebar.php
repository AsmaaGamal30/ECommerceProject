 
<div class="side-bar">

    <div id="close-side-bar" class="fas fa-times"></div>

    <div class="user">
        <img src="<?php echo ASSETS; ?>images/photo_2022-11-27_21-23-33.jpg" alt="">
        <?php if(isset($_SESSION['userf_name'])) :?>
        <h3><?php echo $_SESSION['userf_name']." " .$_SESSION['userl_name'];?></h3>
        <?php  endif; ?>
        <?php if(isset($_SESSION['userf_name'])) :?>
        <a href="./logout.php">log out</a>
        <?php endif; ?>
    </div>
    <nav class="navbar">
        <a href="./index.php"> <i class="fas fa-angle-right"></i> home </a>
        <a href="./about.php"> <i class="fas fa-angle-right"></i> about </a>
        <a href="./products.php"> <i class="fas fa-angle-right"></i> products </a>
        <a href="./contact.php"> <i class="fas fa-angle-right"></i> contact </a>
        <?php if(!isset($_SESSION['userf_name'])) : ?>
        <a href="./login.php"> <i class="fas fa-angle-right"></i> login </a>
        <a href="./signUP.php"> <i class="fas fa-angle-right"></i> register </a>
        <?php endif;?>
        <a href="./cart.php"> <i class="fas fa-angle-right"></i> cart </a>
    </nav>

</div>