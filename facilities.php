<?php include('component/header.php');?>
<!-- Header Banner -->
    <section class="banner-header bg-img bg-fixed" data-overlay-dark="5" data-background="<?php echo SITE;?>img/banner/facilities.jpg">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="subtitle">Our Services</div>
                    <div class="title">RESORT Facilities</div>
                </div>
            </div>
        </div>
    </section>
    <!-- Facilities 1 -->
    <section class="facilities section-padding">
        <div class="container">
            <div class="row">
                <?php include('component/facilities.php');?>  
            </div>
        </div>
    </section>
    <!-- Facilities Details -->
    <section class="facilities2 bg-lightbrown">
        <div class="container">
            <?php //include('component/facilities_details.php');?>  
        </div>
    </section>
    
   
<?php include('component/footer.php');?>
