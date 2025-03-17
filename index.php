<?php include('component/header.php');?>
    <!-- Slider -->
    <header class="header slider-fade">
        <div class="owl-carousel owl-theme">
            <!-- The opacity on the image is made with "data-overlay-dark="number". You can change it using the numbers 0-9. -->
            <div class="item bg-img" data-overlay-dark="7" data-background="<?php echo SITE;?>img/banner/001.jpg">
                <div class="v-middle caption">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8 col-md-12 text-center">
                                <h5>THE VRAJBHOOMI RESORT</h5>
                                <h1>Enjoy a Luxury Experience</h1>
                                <a href="#" class="button-2">Rooms & Suites</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item bg-img" data-overlay-dark="5" data-background="<?php echo SITE;?>img/banner/002.jpg">
                <div class="v-middle caption">
                    <!-- <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8 col-md-12 text-center">
                                <h5>Unique Place to Relax & Enjoy</h5>
                                <h1>Enjoy The Best Moments</h1>
                                <a href="#" class="button-2">Rooms & Suites</a>
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>
            <div class="item bg-img" data-overlay-dark="5" data-background="<?php echo SITE;?>img/banner/003.jpg">
                <div class="v-middle caption">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8 col-md-12 text-center">
                                <h5>Resort & Luxury Hotel</h5>
                                <h1>The Perfect Base For You</h1>
                                <a href="#" class="button-2">Rooms & Suites</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item bg-img" data-overlay-dark="5" data-background="<?php echo SITE;?>img/banner/004.jpg">
                <div class="v-middle caption">
                   <!--  <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8 col-md-12 text-center">
                                <h5>Resort & Luxury Hotel</h5>
                                <h1>The Perfect Base For You</h1>
                                <a href="#" class="button-2">Rooms & Suites</a>
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>
            <div class="item bg-img" data-overlay-dark="5" data-background="<?php echo SITE;?>img/banner/005.jpg">
                <div class="v-middle caption">
                    <!-- <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8 col-md-12 text-center">
                                <h5>Resort & Luxury Hotel</h5>
                                <h1>The Perfect Base For You</h1>
                                <a href="#" class="button-2">Rooms & Suites</a>
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
    </header>
    <!-- About -->
    <section class="about section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-12 mb-15">
                    <div class="section-subtitle">About RESORT </div>
                    <div class="section-title">THE VRAJBHOOMI RESORT</div>
                    <p>is a great choice for travellers looking for a 3 star star hotel in Sasan Gir. This Hotel stands out as one of the highly recommended hotel in Sasan Gir. Hotel is rated out of 5, which is considered as very good.             
                    </p>
                    <p class="mb-20">From all the 3 Star hotels in Sasan Gir, this property is very much popular among the tourists.</p>
                    <p class="mb-20">A smooth check-in/check-out process, flexible policies and friendly management garner great customer satisfaction for this property. The Hotel has standard Check-In time as 12:00 PM and Check-Out time as 10:00 AM.</p> 
                    <p class="mb-20">You can find numerous hotels in Sasan Gir under different categories and this property is one the best hotel under its category...</p> 
                    <a href="<?php echo SITE;?>aboutus.php" class="button-3 mb-15">Read More...</a>
                    <div class="phone"><a href="tel:<?php include('component/mobileno.php'); ?>"><i class="fa-light fa-phone"></i><?php include('component/mobileno.php'); ?></a></div>
                </div>
                <div class="col-lg-3 offset-lg-1 col-md-6 mb-20 mt-45"> <img class="rounded-2 animation-float1" src="<?php echo SITE;?>img/about01.jpg" alt=""> </div>
                <div class="col-lg-3 col-md-6 mb-20"> <img class="rounded-2 animation-float2" src="<?php echo SITE;?>img/about02.jpg" alt=""> </div>
            </div>
        </div>
    </section>
    <!-- Rooms 3 -->
    
    <?php include('component/roomssuites.php');?>
   
    <!-- Facilities -->
    <?php include('component/facilities_tabview.php');?>
    <!-- Testiominals -->
    <?php include('component/testiominals.php');?>
    <!-- Amenities -->
    <section class="amenities section-padding bg-lightbrown">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                 <div class="row">
                    <div class="col-md-12 mb-25 text-center">
                        <div class="section-subtitle">Resort Services</div>
                        <div class="section-title">Amenities</div>
                        <p class="mb-25">The experience elementum sesue in the aucantion alesun in sapien fermen miss caleustion in the sapien.</p> 
                    </div>
                </div>
                <div class="row">                   
                   <?php include('component/amenities_short.php');?>
                </div>
                
                <div class="row">
                    <div class="col-md-12 mb-25 text-center">
                        <a href="<?php echo SITE;?>amenities.php" class="button-3">View All Amenities</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Video -->
    <?php include('component/video.php');?>
    <!-- Pricing 1 -->
    <section class="pricing1 section-padding bg-lightbrown">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12 text-center mb-20">
                    <div class="section-subtitle">Pricing Plan</div>
                    <div class="section-title">Extra Prices</div>
                </div>
            </div>
            <div class="row justify-content-center g-0">
                <div class="col-12 pricing">
                    <div class="item">
                        <div class="img"> <img src="<?php echo SITE;?>img/pricing/01.jpg" class="img-fluid" alt="" />
                            <div class="title">Beverage</div>
                            <div class="overlay"></div>
                        </div>
                        <div class="flex-column cont">
                            <div class="cont-hover">
                                <div class="icon"> <i class="fa-thin fa-martini-glass"></i> </div>
                                <p>In-room beverage lorem ipsum simply drana print typesettin induren.</p>
                                <div class="price">$49 <span>per night</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="item active">
                        <div class="img"> <img src="<?php echo SITE;?>img/pricing/02.jpg" class="img-fluid" alt="" />
                            <div class="title">Cleaning</div>
                            <div class="overlay"></div>
                        </div>
                        <div class="flex-column cont">
                            <div class="cont-hover">
                                <div class="icon"> <i class="fa-thin fa-vacuum"></i> </div>
                                <p>Cleaning lorem in ipsum simply the drana print typesettin induren.</p>
                                <div class="price">$29 <span>daily</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="img"> <img src="<?php echo SITE;?>img/pricing/03.jpg" class="img-fluid" alt="" />
                            <div class="title">Breakfast</div>
                            <div class="overlay"></div>
                        </div>
                        <div class="flex-column cont">
                            <div class="cont-hover">
                                <div class="icon"> <i class="fa-thin fa-mug-saucer"></i> </div>
                                <p>Room breakfast lorem ipsum simply drana print typesettin induren.</p>
                                <div class="price">$69 <span>daily</span></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 text-center mt-30">
                    <div class="section-info">
                        <div class="tag">Questions</div>
                        <div class="desc">You can send your questions to the mail address: <a href="mailto:<?php include('component/email.php'); ?>" class="text-decoration-line-bottom"><?php include('component/email.php'); ?></a></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Offers 2 -->
    <section class="offers2">
        <div class="container">
            <div class="row gx-0">
                <div class="col-lg-3">
                    <a href="#" class="item" data-tab="tab-1">
                        <h5>Stay</h5>
                    </a>
                </div>
                <div class="col-lg-3">
                    <a href="#" class="item" data-tab="tab-2">
                        <h5>Dine</h5>
                    </a>
                </div>
                <div class="col-lg-3">
                    <a href="#" class="item" data-tab="tab-3">
                        <h5>Relax</h5>
                    </a>
                </div>
                <div class="col-lg-3">
                    <a href="#" class="item" data-tab="tab-4">
                        <h5>Weddings</h5>
                    </a>
                </div>
            </div>
        </div>
        <div class="glry-img"> 
            <img id="tab-1" src="<?php echo SITE;?>img/rooms/01.jpg" alt="" class="tab-img current">
            <img id="tab-2" src="<?php echo SITE;?>img/banner/03.jpg" alt="" class="tab-img">
            <img id="tab-3" src="<?php echo SITE;?>img/banner/04.jpg" alt="" class="tab-img">
            <img id="tab-4" src="<?php echo SITE;?>img/banner/05.jpg" alt="" class="tab-img"> </div>
    </section>
    <!-- Blog -->
    <section class="blog1 section-padding bg-lightbrown">
        <div class="container">
            <div class="row mb-15">
                <div class="col-md-12 text-center">
                    <div class="section-subtitle">Latest News</div>
                    <div class="section-title">Hotel Articles</div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                <div class="owl-carousel owl-theme">
                    <div class="item mt-10">
                        <div class="img"> <img src="<?php echo SITE;?>img/blog/1.jpg" class="img-fluid" alt="">
                            <div class="cat">Health</div>
                        </div>
                        <div class="cont">
                            <h4><a href="post.html">Luxury hotel experience: heated pools</a></h4>
                            <p>Lorem ipsum quisque sodales missen the varius rana duru fermen.</p>
                            <div class="author">
                                <div>
                                    <h5>29 August 2025</h5>
                                    <h5>by <a href="#" class="text-decoration-line-bottom">Martin Dan</a></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item mt-10">
                        <div class="img"> <img src="<?php echo SITE;?>img/blog/2.jpg" class="img-fluid" alt="">
                            <div class="cat">Health</div>
                        </div>
                        <div class="cont">
                            <h4><a href="post.html">Hygiene rules in hotels for a safe holiday</a></h4>
                            <p>Lorem ipsum quisque sodales missen the varius rana duru fermen.</p>
                            <div class="author">
                                <div>
                                    <h5>27 August 2025</h5>
                                    <h5>by <a href="#" class="text-decoration-line-bottom">Emily Brown</a></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item mt-10">
                        <div class="img"> <img src="<?php echo SITE;?>img/blog/3.jpg" class="img-fluid" alt="">
                            <div class="cat">Wellness</div>
                        </div>
                        <div class="cont">
                            <h4><a href="post.html">What are the benefits of the Spa?</a></h4>
                            <p>Lorem ipsum quisque sodales missen the varius rana duru fermen.</p>
                            <div class="author">
                                <div>
                                    <h5>25 August 2025</h5>
                                    <h5>by <a href="#" class="text-decoration-line-bottom">Frank White</a></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Booking Search -->
    <!-- <section class="section-padding bg-img bg-fixed" data-overlay-dark="5" data-background="<?php echo SITE;?>img/rooms/01.jpg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12 text-center mb-20">
                    <div class="section-subtitle">Hotel Experience</div>
                    <div class="section-title white">Booking Form</div>
                </div>
            </div>
            <div class="booking-inner clearfix">
                <form action="#" class="form1 clearfix">
                    <div class="col1 c1">
                        <div class="input1_wrapper border-l border-b border-t border-r">
                            <label>Check in</label>
                            <div class="input1_inner">
                                <input type="text" class="form-control input datepicker" placeholder="Check in">
                            </div>
                        </div>
                    </div>
                    <div class="col1 c2">
                        <div class="input1_wrapper border-l border-b border-t border-r">
                            <label>Check out</label>
                            <div class="input1_inner">
                                <input type="text" class="form-control input datepicker" placeholder="Check out">
                            </div>
                        </div>
                    </div>
                    <div class="col2 c3">
                        <div class="select1_wrapper border-l border-b border-t border-r">
                            <label>Adults</label>
                            <div class="select1_inner">
                                <select class="select2 select" style="width: 100%">
                                    <option value="1">1 Adult</option>
                                    <option value="2">2 Adults</option>
                                    <option value="3">3 Adults</option>
                                    <option value="4">4 Adults</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col2 c4">
                        <div class="select1_wrapper border-l border-b border-t border-r">
                            <label>Children</label>
                            <div class="select1_inner">
                                <select class="select2 select" style="width: 100%">
                                    <option value="1">Children</option>
                                    <option value="1">1 Child</option>
                                    <option value="2">2 Children</option>
                                    <option value="3">3 Children</option>
                                    <option value="4">4 Children</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col2 c5">
                        <div class="select1_wrapper border-l border-b border-t border-r">
                            <label>Rooms</label>
                            <div class="select1_inner">
                                <select class="select2 select" style="width: 100%">
                                    <option value="1">1 Room</option>
                                    <option value="2">2 Rooms</option>
                                    <option value="3">3 Rooms</option>
                                    <option value="4">4 Rooms</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col3 c6">
                        <button type="submit" class="btn-form1-submit">Check Now</button>
                    </div>
                </form>
            </div>
        </div>
    </section> -->
<?php include('component/footer.php');?>
