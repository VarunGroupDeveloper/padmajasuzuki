<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

<title><?php echo isset($title) ? $title : 'Default Title'; ?></title>

  <?php $this->load->view('templates/home/style'); ?>

</head>

<!-- page wrapper -->
<body>

    <div class="boxed_wrapper ltr">

        <!-- preloader -->
        <div class="loader-wrap">
            <div class="preloader">
                <div class="preloader-close">close</div>
                <div id="handle-preloader" class="handle-preloader">
                    <div class="animation-preloader">
                        <div class="spinner"></div>
                        <div class="txt-loading">
                            <span data-text-preloader="S" class="letters-loading">
                                S
                            </span>
                            <span data-text-preloader="U" class="letters-loading">
                                U
                            </span>
                            <span data-text-preloader="Z" class="letters-loading">
                                Z
                            </span>
                            <span data-text-preloader="U" class="letters-loading">
                                U
                            </span>
                            <span data-text-preloader="K" class="letters-loading">
                                K
                            </span>
                            <span data-text-preloader="I" class="letters-loading">
                                I
                            </span>
                        </div>
                    </div>  
                </div>
            </div>
        </div>
        <!-- preloader end -->

        <?php $this->load->view('templates/home/header'); ?>

        <?php $this->load->view($page); ?>
        
        <!-- Fixed Right Sidebar -->
        <div class="fixed-side-buttons">

            <!-- Test Ride -->
            <a id="openTestRide" href="#" class="side-btn">
                <i class="fa fa-motorcycle"></i>
                <span>Test Ride</span>
            </a>

            <!-- Book Service -->
            <a id="openBookService" href="#" class="side-btn">
                <i class="fa fa-wrench"></i>
                <span>Book Service</span>
            </a>
        </div>

        <!-- TEST RIDE MODAL -->
        <div id="testRideModal" class="custom-modal">
            <div class="modal-content-box large-modal">
                <span class="close-test close-modal">&times;</span>
                <h3 class="modal-title mb-4">TEST RIDE</h3>

                <form id="testRideForm">
                    <div class="row clearfix">
                        <div class="col-lg-6 col-md-6 form-group">
                            <input type="text" name="name" placeholder="Name" required>
                        </div>

                        <div class="col-lg-6 col-md-6 form-group">
                            <input type="text" name="model" placeholder="Model" required>
                        </div>

                        <div class="col-lg-6 col-md-6 form-group">
                            <input type="tel" name="mobile" placeholder="Phone Number" required>
                        </div>
                    </div>

                    <div class="col-lg-12 form-group message-btn centred">
                        <button type="submit" class="theme-btn">Send Message</button>
                    </div>
                </form>
                <p class="test-success" style="color: green; display:none;"></p>
                <p class="test-error" style="color: red; display:none;"></p>

            </div>
        </div>


        <!-- BOOK SERVICE MODAL -->
        <div id="bookserviceModal" class="custom-modal">
            <div class="modal-content-box large-modal">
                <span class="close-service close-modal">&times;</span>
                <h3 class="modal-title mb-4">BOOK A SERVICE</h3>

                <form id="bookserviceForm">
                    <div class="row clearfix">
                        <div class="col-lg-6 col-md-6 form-group">
                            <input type="text" name="name" placeholder="Name" required>
                        </div>

                        <div class="col-lg-6 col-md-6 form-group">
                            <input type="text" name="model" placeholder="Model" required>
                        </div>

                        <div class="col-lg-6 col-md-6 form-group">
                            <input type="tel" name="mobile" placeholder="Phone Number" required>
                        </div>
                    </div>

                    <div class="col-lg-12 form-group message-btn centred">
                        <button type="submit" class="theme-btn">Send Message</button>
                    </div>
                </form>
                <p class="service-success" style="color: green; display:none;"></p>
                <p class="service-error" style="color: red; display:none;"></p>

            </div>
        </div>

        <!-- main-footer -->
       <?php $this->load->view('templates/home/footer'); ?>
        <!-- main-footer end -->



        <!--Scroll to top-->
        <div class="scroll-to-top">
            <div>
                <div class="scroll-top-inner">
                    <div class="scroll-bar">
                        <div class="bar-inner"></div>
                    </div>
                    <div class="scroll-bar-text">Go To Top</div>
                </div>
            </div>
        </div>
        <!-- Scroll to top end -->
        
    </div>
     <?php $this->load->view('templates/home/script'); ?>



</body><!-- End of .page_wrapper -->
</html>
