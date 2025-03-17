<!-- START X-NAVIGATION -->
<?php
$menuname =  basename($_SERVER['PHP_SELF']);
?>
<!-- Navbar -->
<nav class="navbar navbar-expand-lg">
    <div class="container">
        <!-- Logo -->
        <div class="logo-wrapper">
            <a class="logo" href="<?php echo SITE;?>">
                <img src="<?php echo SITE;?>img/logo.png" class="logo-img" alt="THE VRAJBHOOMI RESORT Sasan Gir - Gujarat"> 
            </a>
            <!-- <div class="logo"><h2>THE VRAJBHOOMI RESORT Sasan Gir - Gujarat </h2></div> -->
        </div>
        <!-- Button -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"><i class="fa-light fa-bars"></i></span> </button>
        <!-- Menu -->
        <div class="collapse navbar-collapse" id="navbar">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item">
                    <a class="nav-link <?php if($menuname==''){ echo 'active'; }?>" href="<?php echo SITE;?>">Home</a>
                </li>               
                <li class="nav-item">
                    <a class="nav-link <?php if($menuname=='aboutus.php'){ echo 'active'; }?>" href="<?php echo SITE;?>aboutus.php">
                        About Us
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="<?php echo SITE;?>rooms.php" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
                        Rooms <i class="fa-light fa-angle-down"></i>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="<?php echo SITE;?>standard_suite.php" class="dropdown-item"><span>Standard Suite</span></a></li>
                        <li><a href="<?php echo SITE;?>penthouse_suite.php" class="dropdown-item"><span>Penthouse Suite</span></a></li>
                        <li><a href="<?php echo SITE;?>presidential_suite.php" class="dropdown-item"><span>Presidential Suite</span></a></li>
                        <li><a href="<?php echo SITE;?>superior_suite.php" class="dropdown-item"><span>Superior Suite</span></a></li>
                        <li><a href="<?php echo SITE;?>cottage_suite.php" class="dropdown-item"><span>Cottage Suite</span></a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="<?php echo SITE;?>facilities.php" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">Facilities <i class="fa-light fa-angle-down"></i></a>
                    <ul class="dropdown-menu">
                        <li><a href="<?php echo SITE;?>facilities.php" class="dropdown-item"><span>Facilities</span></a></li>
                        <li><a href="<?php echo SITE;?>amenities.php" class="dropdown-item"><span>Amenities</span></a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown"> 
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
                        Resort <i class="fa-light fa-angle-down"></i>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="<?php echo SITE;?>partylawn.php" class="dropdown-item"><span>Party Lawn</span></a></li>
                        <li><a href="<?php echo SITE;?>banquet.php" class="dropdown-item"><span>Banquet Hall</span></a></li>
                        <li><a href="<?php echo SITE;?>restaurant.php" class="dropdown-item"><span>Restaurant</span></a></li>
                      
                    </ul>
                </li>
                <li class="nav-item"><a class="nav-link" href="<?php echo SITE;?>attractions.php">Attractions</a></li>
                <li class="nav-item dropdown"> 
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
                        Gallery <i class="fa-light fa-angle-down"></i>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="<?php echo SITE;?>gallery_image.php" class="dropdown-item"><span>Image Gallery</span></a></li>
                        <li><a href="<?php echo SITE;?>gallery_video.php" class="dropdown-item"><span>Video Gallery</span></a></li>
                    </ul>
                </li>
                <li class="nav-item <?php if($menuname=='contactus.php'){ echo 'active'; }?>" >
                    <a class="nav-link" href="<?php echo SITE;?>contactus.php">Contact Us</a>
                </li>
            </ul>
            <div class="navbar-right">
                <div class="phonex"><a href="tel:<?php include('component/mobileno.php'); ?>"><i class="fa-solid fa-phone"></i> <?php include('component/mobileno.php'); ?></a></div>
            </div>
        </div>
    </div>
</nav>
