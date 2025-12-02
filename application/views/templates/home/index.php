
     <!-- banner-section -->
       <section class="banner-section p_relative pb_80">
            <div class="banner-carousel owl-theme owl-carousel owl-nav-none dots-style-one">

            <div class="slide-item">
                <div class="bg-layer">
                    <picture>
                        <!-- Mobile Image -->
                        <source media="(max-width: 769px)" srcset="assets/images/banner/mobile1.webp">

                        <!-- Desktop Image -->
                        <img src="assets/images/banner/suzuki.webp" alt="" style="width:100%; height:100%; object-fit:cover;">
                    </picture>
                </div>
            </div>


            <div class="slide-item">
                <div class="bg-layer">
                    <picture>
                        <source media="(max-width: 769px)" srcset="assets/images/banner/mobile.webp">
                        <img src="assets/images/banner/suzuki2.webp" alt="" style="width:100%; height:100%; object-fit:cover;">
                    </picture>
                </div>
            </div>


            <div class="slide-item">
                <div class="bg-layer">
                    <picture>
                        <source media="(max-width: 769px)" srcset="assets/images/banner/mobile2.webp">
                        <img src="assets/images/banner/suzuki3.webp" alt="" style="width:100%; height:100%; object-fit:cover;">
                    </picture>
                </div>
            </div>


            </div>
        </section>
        <!-- banner-section end -->

        <section class="search-section">
            <div class="outer-container">
                <form method="post" action="" class="clearfix">

                    <!-- STATE -->
                    <div class="form-group">
                        <div class="select-box">
                            <select class="wide" id="mystate" name="state">
                                <option value="">Select State</option>
                                <?php foreach($states as $s): ?>
                                    <option value="<?= $s->id ?>"><?= $s->state_name ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>

                    <!-- DISTRICT -->
                    <div class="form-group">
                        <div class="select-box">
                            <select class="wide" id="mydistrict" name="mydistrict">
                                <option value="">-- Select District --</option>
                            </select>
                        </div>
                    </div>

                    <!-- LOCATION -->
                    <div class="form-group">
                        <div class="select-box">
                            <select id="mylocation" name="location_id" class="wide">
                                <option value="">-- Select Location --</option>
                            </select>
                        </div>
                    </div>


                    <div class="message-btn">
                        <button type="submit" class="theme-btn">Search</button>
                    </div>
                </form>
            </div>
        </section>

        <?php if (!empty($outlet)) : ?>

        <section class="pt_30 pb_50">
            <div class="container">

                <div class="row">

                    <!-- LEFT SIDE -->
                    <div class="col-lg-7 col-md-12 mb-4">
                        <div class="outlet-card">

                            <h5 class="pb_10">
                                <?= $outlet->outlet_name ?>
                            </h5>

                            <p class="outlet-line">
                                <i class="fas fa-map-marker-alt" style="color:#e74c3c; margin-right:8px;"></i>
                                <?= $outlet->address ?>
                            </p>

                            <p class="outlet-line">
                                <i class="fa fa-phone" style="color:#27ae60 !important; margin-right:8px;"></i>
                                <a href="tel:<?= $outlet->phone ?>" class="outlet-link">
                                    <?= $outlet->phone ?>
                                </a>
                            </p>

                            <p class="outlet-line">
                                <i class="far fa-clock" style="color:#f39c12; margin-right:8px;"></i>
                                Mon – Sat: 9:00 AM – 7:00 PM
                            </p>

                            <div class="outlet-social">
                                <span class="social-label">Social Links :</span>

                                <div class="social-icons">
                                    <?php if (!empty($outlet->instagram_link)) : ?>
                                        <a href="<?= $outlet->instagram_link ?>" target="_blank" class="social-icon instagram">
                                            <i class="fab fa-instagram"></i>
                                        </a>
                                    <?php endif; ?>

                                    <?php if (!empty($outlet->facebook_link)) : ?>
                                        <a href="<?= $outlet->facebook_link ?>" target="_blank" class="social-icon facebook">
                                            <i class="fab fa-facebook-f"></i>
                                        </a>
                                    <?php endif; ?>
                                </div>
                            </div>



                        </div>
                    </div>

                    <!-- RIGHT SIDE -->
                    <div class="col-lg-5 col-md-12">
                        <div class="map-card">
                            <iframe 
                                src="https://www.google.com/maps?q=<?= urlencode($outlet->address) ?>&output=embed"
                                width="100%" 
                                height="350"
                                style="border:0;"
                                allowfullscreen
                                loading="lazy">
                            </iframe>
                        </div>
                    </div>

                </div>

            </div>
        </section>

        <?php endif; ?>

        <!-- shop-details -->
        <section class="shop-details pt_100 pb_100 shop-style-two" id="product">
            <div class="auto-container">
                <div class="sec-title mb_35">
                    <h2 class="text-center">Our Products</h2>
                </div>
                <div class="product-discription mb_70">
                    <div class="tabs-box">
                        <div class="tab-btn-box">
                            <ul class="tab-btns tab-buttons clearfix">
                                <li class="tab-btn active-btn" data-tab="#tab-1">Scooters</li>
                                <li class="tab-btn" data-tab="#tab-2">Motorcycles</li>
                            </ul>
                        </div>
                        <div class="tabs-content mt_10">
                            <div class="tab active-tab" id="tab-1">
                                <div class="four-item-carousel owl-carousel owl-theme owl-dots-none nav-style-one">
                                    <div class="shop-block-one">
                                        <div class="inner-box">
                                            <div class="image-box">
                                                <figure class="image"><img src="assets/images/products/suzuki-access.webp" alt=""></figure>
                                            </div>
                                            <div class="lower-content">
                                                <h4><a href="shop-details.html">Suzuki Access</a></h4>
                                                <h5>Starting From ₹ 80,081/-</h5>
                                                <div class="overlay-content">
                                                    <ul class="feature-list clearfix">
                                                        <li><strong>Engine Type : </strong>4- Stroke, 1-Cylinder, Air Cooled</li>
                                                        <li><strong>Displacement : </strong>124 cm³</li>
                                                        <li><strong>Transmission : </strong>SOHC, 2-Valve</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="shop-block-one">
                                        <div class="inner-box">
                                            <div class="image-box">
                                                <figure class="image"><img src="assets/images/products/suzuki-avnis.webp" alt=""></figure>
                                            </div>
                                            <div class="lower-content">
                                                <h4><a href="shop-details.html">Suzuki Avenis</a></h4>
                                                <h5>Starting From ₹ 88,238/-</h5>
                                                <div class="overlay-content">
                                                    <ul class="feature-list clearfix">
                                                        <li><strong>Engine Type : </strong>4- Stroke, 1-Cylinder, Air Cooled</li>
                                                        <li><strong>Displacement : </strong>124 cm³</li>
                                                        <li><strong>Transmission : </strong>SOHC, 2-Valve</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="shop-block-one">
                                        <div class="inner-box">
                                            <div class="image-box">
                                                <figure class="image"><img src="assets/images/products/suzuki-burgman.webp" alt=""></figure>
                                            </div>
                                            <div class="lower-content">
                                                <h4><a href="shop-details.html">Suzuki Burgman Street</a></h4>
                                                <h5>Starting From ₹ 95,024/-</h5>
                                                <div class="overlay-content">
                                                    <ul class="feature-list clearfix">
                                                        <li><strong>Engine Type : </strong>4- Stroke, 1-Cylinder, Air Cooled</li>
                                                        <li><strong>Displacement : </strong>124 cm³</li>
                                                        <li><strong>Transmission : </strong>Fuel Injection</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="shop-block-one">
                                        <div class="inner-box">
                                            <div class="image-box">
                                                <figure class="image"><img src="assets/images/products/suzuki-ev.webp" alt=""></figure>
                                            </div>
                                            <div class="lower-content">
                                                <h4><a href="shop-details.html">E- Access</a></h4>
                                                <h5 style="color: red;">Coming Soon....</h5>
                                                <div class="overlay-content">
                                                    <ul class="feature-list clearfix">
                                                        <li><strong>Battery voltage : </strong>51.2 V</li>
                                                        <li><strong>Maximum Power* : </strong>4.1 Kw</li>
                                                        <li><strong>Range (As per AIS 040) : </strong>95 km</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="shop-block-one">
                                        <div class="inner-box">
                                            <div class="image-box">
                                                <figure class="image"><img src="assets/images/products/Burgman.webp" alt=""></figure>
                                            </div>
                                            <div class="lower-content">
                                                <h4><a href="shop-details.html">Burgman Street EX</a></h4>
                                                <h5>Starting From ₹ 1,10,698/-</h5>
                                                <div class="overlay-content">
                                                    <ul class="feature-list clearfix">
                                                        <li><strong>Engine Type : </strong>4- Stroke, 1-Cylinder, Air Cooled</li>
                                                        <li><strong>Displacement : </strong>124 cm³</li>
                                                        <li><strong>Transmission : </strong>Fuel Injection</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> 
                            </div>
                            <div class="tab" id="tab-2">
                                  <div class="four-item-carousel owl-carousel owl-theme owl-dots-none nav-style-one">
                                    <div class="shop-block-one">
                                        <div class="inner-box">
                                            <div class="image-box">
                                                <figure class="image"><img src="assets/images/products/gixeer_250.webp" alt=""></figure>
                                            </div>
                                            <div class="lower-content">
                                                <h4><a href="shop-details.html">Gixxer 250</a></h4>
                                                <h5>Starting From ₹ 1,92,565/-</h5>
                                                <div class="overlay-content">
                                                    <ul class="feature-list clearfix">
                                                        <li><strong>Engine Type : </strong>4-Cycle, 1-cylinder, Oil cooled</li>
                                                        <li><strong>Displacement : </strong>249cm³</li>
                                                        <li><strong>Transmission : </strong>Fuel Injection</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="shop-block-one">
                                        <div class="inner-box">
                                            <div class="image-box">
                                                <figure class="image"><img src="assets/images/products/Vstorm.webp" alt=""></figure>
                                            </div>
                                            <div class="lower-content">
                                                <h4><a href="shop-details.html">V Stroam</a></h4>
                                                <h5>Starting From ₹ 2,00,814/-</h5>
                                                <div class="overlay-content">
                                                    <ul class="feature-list clearfix">
                                                        <li><strong>Engine Type : </strong>4-stroke, Single-cylinder, oil-cooled, SOHC</li>
                                                        <li><strong>Displacement : </strong>249cm³</li>
                                                        <li><strong>Transmission : </strong>6-speed constant mesh</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="shop-block-one">
                                        <div class="inner-box">
                                            <div class="image-box">
                                                <figure class="image"><img src="assets/images/products/gixeer_sf_ffv.webp" alt=""></figure>
                                            </div>
                                            <div class="lower-content">
                                                <h4><a href="shop-details.html">Gixxer SF 250 FFV</a></h4>
                                                <h5>Starting From ₹ 2,06,358/-</h5>
                                                <div class="overlay-content">
                                                    <ul class="feature-list clearfix">
                                                        <li><strong>Engine Type : </strong>4-Cycle, 1-cylinder, Oil cooled</li>
                                                        <li><strong>Displacement : </strong>249cm³</li>
                                                        <li><strong>Transmission : </strong>Fuel Injection</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="shop-block-one">
                                        <div class="inner-box">
                                            <div class="image-box">
                                                <figure class="image"><img src="assets/images/products/gixeer-150.webp" alt=""></figure>
                                            </div>
                                            <div class="lower-content">
                                                <h4><a href="shop-details.html">Gixxer </a></h4>
                                                <h5>Starting From ₹ 1,29,678/-</h5>
                                                <div class="overlay-content">
                                                    <ul class="feature-list clearfix">
                                                        <li><strong>Engine Type : </strong>4-Cycle, 1-cylinder, Air cooled</li>
                                                        <li><strong>Displacement : </strong>155cm³</li>
                                                        <li><strong>Transmission : </strong>Fuel Injection</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="shop-block-one">
                                        <div class="inner-box">
                                            <div class="image-box">
                                                <figure class="image"><img src="assets/images/products/gixeer-sf-150.webp" alt=""></figure>
                                            </div>
                                            <div class="lower-content">
                                                <h4><a href="shop-details.html">Gixxer SF </a></h4>
                                                <h5>Starting From ₹ 1,37,926/-</h5>
                                                <div class="overlay-content">
                                                    <ul class="feature-list clearfix">
                                                        <li><strong>Engine Type : </strong>4-Cycle, 1-cylinder, Air cooled</li>
                                                        <li><strong>Displacement : </strong>155cm³</li>
                                                        <li><strong>Transmission : </strong>Fuel Injection</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="shop-block-one">
                                        <div class="inner-box">
                                            <div class="image-box">
                                                <figure class="image"><img src="assets/images/products/gixeer-sf-250.webp" alt=""></figure>
                                            </div>
                                            <div class="lower-content">
                                                <h4><a href="shop-details.html">Gixxer SF 250</a></h4>
                                                <h5>Starting From ₹ 1,84,772/-</h5>
                                                <div class="overlay-content">
                                                    <ul class="feature-list clearfix">
                                                        <li><strong>Engine Type : </strong>4-Cycle, 1-cylinder, Oil cooled</li>
                                                        <li><strong>Displacement : </strong>249cm³</li>
                                                        <li><strong>Transmission : </strong>Fuel Injection</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- shop-details end -->

        <section class="feature-section pb_70" id="offers">
            <div class="auto-container">
                <div class="sec-title mb_35">
                    <h2 class="text-center">Latest Offers</h2>
                </div>
                <div class="row clearfix">

                    <div class="col-lg-4 col-md-6 col-sm-12 feature-block">
                        <div class="feature-block-one only-image">
                            <figure class="image">
                                <img src="assets/images/brands/suzuki-vij-sccoters.webp" alt="">
                            </figure>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-12 feature-block">
                        <div class="feature-block-one only-image">
                            <figure class="image">
                                <img src="assets/images/brands/suzuki-vij.webp" alt="">
                            </figure>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-12 feature-block">
                        <div class="feature-block-one only-image">
                            <figure class="image">
                                <img src="assets/images/brands/suzuki-vizag.webp" alt="">
                            </figure>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- about-section -->
        <section class="about-section pt_80 pb_80" id="about">
            <div class="auto-container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                        <div class="about-content mr_15">
                            <div class="text-box mb_30">
                                <h2>About Padmaja Suzuki</h2>
                                <p>Founded in 2007, Padmaja Suzuki is an authorized Suzuki Motorcycle dealer and the leading destination for premium Suzuki two-wheelers in Vijayawada, Andhra Pradesh. Under the esteemed leadership of Managing Director V Varun Dev, Chairman V Prabhu Kishore, and Executive Director T Vinod Kumar, we proudly offer a wide range of Suzuki motorcycles and scooters, focusing on performance, reliability, and style. Our dedication to personalised service ensures that every customer enjoys a smooth and seamless experience, from browsing our inventory to receiving reliable after-sales support.</p>
                                <p>
                                At Padmaja Suzuki, customer satisfaction is at the core of everything we do. Beyond providing high-quality vehicles, we are committed to offering comprehensive post-purchase services, including expert guidance and ongoing maintenance. With a passionate team and strong leadership, we aim to build long-lasting relationships, ensuring that each customer’s Suzuki journey is both smooth and fulfilling.</p>
                            </div>
                            <div class="inner-box">
                                <div class="row clearfix">
                                    <div class="col-lg-6 col-md-6 col-sm-12 single-column">
                                        <div class="single-item">
                                            <div class="image-box">
                                                <figure class="image"><img src="assets/images/brands/scooter.webp" alt=""></figure>
                                            </div>
                                            <h3>49</h3>
                                            <span>Showrooms</span>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 single-column">
                                        <div class="single-item">
                                            <div class="image-box">
                                                <ul class="clients-list">
                                                    <li><img src="assets/images/brands/sales-man-profile.webp" alt=""></li>
                                                    <li><img src="assets/images/brands/sales-women-profile.webp" alt=""></li>
                                                    <li><img src="assets/images/brands/sales-man-profile2.webp" alt=""></li>
                                                </ul>
                                            </div>
                                            <h3>2 Lakh+</h3>
                                            <span>Happy Customers</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                        <div class="about-image ml_15">
                            <figure class="image image-1"><img src="assets/images/brands/showroom.webp" alt=""></figure>
                            <figure class="image image-2"><img src="assets/images/brands/sales-executive.webp" alt=""></figure>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- about-section end -->

        <!-- highlights-style-two -->
        <!-- highlights-style-two -->
        <section class="highlights-style-two centred pb_80" id="services">
            <div class="auto-container">
                <div class="row clearfix">

                    <!-- Accessories -->
                    <div class="col-lg-4 col-md-6 col-sm-12 highlights-block">
                        <div class="highlights-block-one">
                            <div class="inner-box">
                                <div class="icon-box">
                                    <img src="assets/images/brands/helmet.svg" alt="Accessories" class="highlight-icon">
                                </div>
                                <h3>Accessories</h3>
                                <p>
                                    Upgrade your ride with genuine Suzuki accessories crafted for
                                    comfort, safety, and style. Our team helps you choose the perfect
                                    add-ons for your needs.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Finance -->
                    <div class="col-lg-4 col-md-6 col-sm-12 highlights-block">
                        <div class="highlights-block-one">
                            <div class="inner-box">
                                <div class="icon-box">
                                    <img src="assets/images/brands/finance.svg" alt="Finance" class="highlight-icon">
                                </div>
                                <h3>Finance</h3>
                                <p>
                                    Enjoy easy and flexible finance options tailored to your budget.
                                    With quick approvals and simple EMI plans, we make your purchase
                                    smooth and easy.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Insurance -->
                    <div class="col-lg-4 col-md-6 col-sm-12 highlights-block">
                        <div class="highlights-block-one">
                            <div class="inner-box">
                                <div class="icon-box">
                                    <img src="assets/images/brands/insurance.svg" alt="Insurance" class="highlight-icon">
                                </div>
                                <h3>Insurance</h3>
                                <p>
                                    Protect your vehicle with reliable Suzuki insurance plans.
                                    Choose the right coverage while our team supports you with quick
                                    claims and renewals.
                                </p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- highlights-style-two end -->

        <!-- banner-style-two -->
        <section class="events-section pt_60 pb_70 p_relative" id="events">
            <div class="auto-container">
                <div class="sec-title mb_35">
                    <h2 class="text-center">Events</h2>
                </div>

                <div class="row clearfix">

                    <!-- BIG IMAGE LEFT -->
                    <div class="col-lg-8 col-md-12 col-sm-12 mb-3">
                        <div class="event-img-box">
                            <img src="assets/images/brands/event.webp" alt="" class="event-img">
                        </div>
                    </div>

                    <!-- RIGHT SIDE TWO SMALL IMAGES -->
                    <div class="col-lg-4 col-md-12 col-sm-12">

                        <div class="event-img-box mb-3">
                            <img src="assets/images/brands/event1.webp" alt="" class="event-img">
                        </div>

                        <div class="event-img-box">
                            <img src="assets/images/brands/event2.webp" alt="" class="event-img">
                        </div>

                    </div>

                </div>
            </div>
        </section>

        <!-- banner-style-two end -->
        <!-- category-section -->
       <!--  <section class="category-section pb_100">
            <div class="auto-container">

                <div class="sec-title mb_35">
                    <h2 class="text-center">Awards & Achievements</h2>
                </div>
                <div class="category-carousel owl-carousel owl-theme owl-dots-none owl-nav-none">
                    <div class="category-block-one">
                        <div class="inner-box">
                            <figure class="image-box"><img src="assets/images/resource/category-1.png" alt=""></figure>
                            <h4><a href="index.html">Light & Optics</a></h4>
                            <span class="text">3 items</span>
                        </div>
                    </div>
                    <div class="category-block-one">
                        <div class="inner-box">
                            <figure class="image-box"><img src="assets/images/resource/category-2.png" alt=""></figure>
                            <h4><a href="index.html">Braking System</a></h4>
                            <span class="text">5 items</span>
                        </div>
                    </div>
                    <div class="category-block-one">
                        <div class="inner-box">
                            <figure class="image-box"><img src="assets/images/resource/category-3.png" alt=""></figure>
                            <h4><a href="index.html">Exhaust System</a></h4>
                            <span class="text">3 items</span>
                        </div>
                    </div>
                    <div class="category-block-one">
                        <div class="inner-box">
                            <figure class="image-box"><img src="assets/images/resource/category-4.png" alt=""></figure>
                            <h4><a href="index.html">Cooling System</a></h4>
                            <span class="text">5 items</span>
                        </div>
                    </div>
                    <div class="category-block-one">
                        <div class="inner-box">
                            <figure class="image-box"><img src="assets/images/resource/category-5.png" alt=""></figure>
                            <h4><a href="index.html">Car Wheels</a></h4>
                            <span class="text">3 items</span>
                        </div>
                    </div>
                    <div class="category-block-one">
                        <div class="inner-box">
                            <figure class="image-box"><img src="assets/images/resource/category-6.png" alt=""></figure>
                            <h4><a href="index.html">Exterior Parts</a></h4>
                            <span class="text">2 items</span>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->
        <!-- category-section end -->

        <!-- highlights-section -->
        <section class="highlights-section pt_35 pb_5">
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="col-lg-3 col-md-6 col-sm-12 single-column">
                        <div class="single-item">
                            <div class="icon-box"><i class="icon-14"></i></div>
                            <h5>100% Customer Satisfaction</h5>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 single-column">
                        <div class="single-item">
                            <div class="icon-box"><i class="icon-15"></i></div>
                            <h5>Reliable Service and Support is Our Mission</h5>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 single-column">
                        <div class="single-item">
                            <div class="icon-box"><i class="icon-16"></i></div>
                            <h5>100% Genuine Two-Wheeler Accessories</h5>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 single-column">
                        <div class="single-item">
                            <div class="icon-box"><i class="icon-17"></i></div>
                            <h5>24/7 Assistance for Our Valued Customers</h5>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- highlights-section end -->

        <section class="contact-section pt_70 pb_80 contact-info-section" id="contact">
            <div class="auto-container">

                <div class="sec-title centred mb_50">
                    <h2>Contact Information</h2>
                </div>

                <div class="row clearfix">

                    <!-- VIJAYAWADA -->
                    <div class="col-lg-4 col-md-6 col-sm-12 info-column">
                        <div class="info-block-one">
                            <div class="inner-box">
                                <div class="icon-box"><i class="icon-47"></i></div>
                                <h4>Visakhapatnam</h4>
                                <p>
                                    D.NO. 88/9, BLOCK-D, SRINAGAR, NH-5, OLD GAJUWAKA , WARD-59, Viskhapatnam, Andhra Pradesh PINCODE-530026.

                                </p>
                                <p ><strong>Email : </strong> <a href="https://mail.google.com/mail/?view=cm&fs=1&to=gmvizag@padmajasuzuki.com" target="_blank">  gmvizag@padmajasuzuki.com</a></p>
                                <p><strong>General Manager : </strong>+91 9885297788</p>
                                <p><strong>Branch Manager : </strong>+91 8886653183</p>
                            </div>
                        </div>
                    </div>

                    <!-- VISAKHAPATNAM -->
                    <div class="col-lg-4 col-md-6 col-sm-12 info-column">
                        <div class="info-block-one">
                            <div class="inner-box">
                                <div class="icon-box"><i class="icon-47"></i></div>
                                <h4>Vijayawada</h4>
                                <p>
                                    D.NO. 40, Prabhu Nilayam, 1-11, MG Rd, Sidhartha Nagar, Labbipet, Vijayawada, Andhra Pradesh 520010

                                </p>
                                <p ><strong>Email : </strong> <a href="https://mail.google.com/mail/?view=cm&fs=1&to=sales.mgrd@padmajasuzuki.com" target="_blank">sales.mgrd@padmajasuzuki.com</a></p>
                                <p><strong>General Manager : </strong>+91 9052329555</p>
                                <p><strong>Branch Manager : </strong>+91 7386169333</p>
                            </div>
                        </div>
                    </div>

                    <!-- HYDERABAD -->
                    <div class="col-lg-4 col-md-6 col-sm-12 info-column">
                        <div class="info-block-one">
                            <div class="inner-box">
                                <div class="icon-box"><i class="icon-47"></i></div>
                                <h4>Hyderabad</h4>
                                <p>
                                    A, 1-10-178, 2, Varun Towers-II, Prakash Nagar,  Begumpet, Hyderabad, Telangana 500016

                                </p>
                                <p ><strong>Email : </strong> <a href="https://mail.google.com/mail/?view=cm&fs=1&to=hyderabad.padmaja.ceo@suzukidealers.in" target="_blank">hyderabad.padmaja.ceo@suzukidealers.in</a></p>
                                 <p><strong>General Manager : </strong>+91 6300939949</p>
                                <p><strong>Branch Manager : </strong>+91 9035609333</p>
                            </div>
                        </div>
                    </div>

                </div>


                <!-- FORM + MAP -->
                <div class="row">
                    <!-- GOOGLE MAP -->
                    <div class="col-lg-6 col-md-12">
                        <iframe 
                            src="https://www.google.com/maps/d/embed?mid=1WX0XHW7GE8qlY1F8xYlto8Lfnet4Hl0&ehbc=2E312F"
                            width="100%" height="500" style="border:0">
                        </iframe>
                    </div>
                    <!-- CONTACT FORM -->
                    <div class="col-lg-6 col-md-12">
                        <div class="form-inner">
                            <form method="post" id="contact-form">
                                <div class="row clearfix">
                                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                        <input type="text" name="username" placeholder="Name" required>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                        <input type="email" name="email" placeholder="E-mail" required>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                        <input type="text" name="phone" placeholder="Phone" required>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                        <input type="text" name="subject" placeholder="Subject" required>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                        <textarea name="message" placeholder="Type message"></textarea>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 form-group message-btn centred">
                                        <button type="submit" class="theme-btn" name="submit-form">
                                            Send Message<span></span><span></span><span></span><span></span>
                                        </button>
                                    </div>
                                </div>
                            </form>
                            <p class="test-success" style="color: green; display:none;"></p>
                            <p class="test-error" style="color: red; display:none;"></p>
                        </div>
                    </div>

                    

                </div>

            </div>
        </section>
