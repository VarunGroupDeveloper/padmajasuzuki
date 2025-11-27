    <!-- jequery plugins -->
    <script src="<?= base_url(); ?>assets/js/jquery.js"></script>
    <script src="<?= base_url(); ?>assets/js/bootstrap.min.js"></script>
    <script src="<?= base_url(); ?>assets/js/owl.js"></script>
    <script src="<?= base_url(); ?>assets/js/wow.js"></script>
    <script src="<?= base_url(); ?>assets/js/validation.js"></script>
    <script src="<?= base_url(); ?>assets/js/jquery.fancybox.js"></script>
    <script src="<?= base_url(); ?>assets/js/appear.js"></script>
    <script src="<?= base_url(); ?>assets/js/isotope.js"></script>
    <script src="<?= base_url(); ?>assets/js/parallax-scroll.js"></script>
    <script src="<?= base_url(); ?>assets/js/jquery.nice-select.min.js"></script>
    <script src="<?= base_url(); ?>assets/js/language.js"></script>
    <script src="<?= base_url(); ?>assets/js/countdown.js"></script>
    <script src="<?= base_url(); ?>assets/js/jquery-ui.js"></script>
    <script src="<?= base_url(); ?>assets/js/lenis.min.js"></script>
    <script src="<?= base_url(); ?>assets/js/aos.js"></script>

    <!-- main-js -->
    <script src="<?= base_url(); ?>assets/js/script.js"></script>

    <script src="<?php echo base_url()?>assets/js/custom.js"></script>
    <script id="chat360__whatsapp_script" src="https://app.chat360.io/widget/chatbox/common_scripts/whatsapp-script.js?number=918886617015&message=&label=&web-script=1" async></script>
    <script>

        // OPEN Test Ride
        document.getElementById("openTestRide").addEventListener("click", function(e){
            e.preventDefault();
            document.getElementById("testRideModal").style.display = "flex";
        });

        // OPEN Book Service
        document.getElementById("openBookService").addEventListener("click", function(e){
            e.preventDefault();
            document.getElementById("bookserviceModal").style.display = "flex";
        });

        // CLOSE Test Ride
        document.querySelector(".close-test").addEventListener("click", function(){
            document.getElementById("testRideModal").style.display = "none";
        });

        // CLOSE Book Service
        document.querySelector(".close-service").addEventListener("click", function(){
            document.getElementById("bookserviceModal").style.display = "none";
        });

        // CLOSE on outside click
        window.addEventListener("click", function(e){

            if(e.target === document.getElementById("testRideModal")){
                document.getElementById("testRideModal").style.display = "none";
            }

            if(e.target === document.getElementById("bookserviceModal")){
                document.getElementById("bookserviceModal").style.display = "none";
            }

        });
    </script>
    <script>
        $(document).ready(function () {

            // Initialize plugin on page load (if using niceSelect)
            if ($.fn.niceSelect) {
                $('select.wide').niceSelect();
            }

            $('#mystate').on('change', function () {
                const stateId = $(this).val();

                $('#mydistrict').html('<option value="">Loading...</option>');
                $('#mylocation').html('<option value="">Select Location</option>');

                if (stateId) {
                    $.ajax({
                        url: '<?= base_url("home/get_districts") ?>',
                        type: 'POST',
                        data: { state_id: stateId },
                        success: function (response) {
                            console.log('District Response:', response);
                            $('#mydistrict').html(response);

                            // 🔁 Refresh district dropdown UI
                            if ($.fn.niceSelect) {
                                $('#mydistrict').niceSelect('destroy');
                                $('#mydistrict').niceSelect();
                            }
                        },
                        error: function () {
                            $('#mydistrict').html('<option value="">Error loading districts</option>');
                            if ($.fn.niceSelect) {
                                $('#mydistrict').niceSelect('destroy');
                                $('#mydistrict').niceSelect();
                            }
                        }
                    });
                } else {
                    $('#mydistrict').html('<option value="">-- Select District --</option>');
                    if ($.fn.niceSelect) {
                        $('#mydistrict').niceSelect('destroy');
                        $('#mydistrict').niceSelect();
                    }
                }
            });

            $('#mydistrict').on('change', function () {
                const districtId = $(this).val();

                $('#mylocation').html('<option value="">Loading...</option>');

                if (districtId) {
                    $.ajax({
                        url: '<?= base_url("home/get_locations") ?>',
                        type: 'POST',
                        data: { district_id: districtId },
                        success: function (response) {
                            console.log('Location Response:', response);
                            $('#mylocation').html(response);

                            // 🔁 Refresh location dropdown UI
                            if ($.fn.niceSelect) {
                                $('#mylocation').niceSelect('destroy');
                                $('#mylocation').niceSelect();
                            }
                        },
                        error: function () {
                            $('#mylocation').html('<option value="">Error loading locations</option>');
                            if ($.fn.niceSelect) {
                                $('#mylocation').niceSelect('destroy');
                                $('#mylocation').niceSelect();
                            }
                        }
                    });
                } else {
                    $('#mylocation').html('<option value="">-- Select Location --</option>');
                    if ($.fn.niceSelect) {
                        $('#mylocation').niceSelect('destroy');
                        $('#mylocation').niceSelect();
                    }
                }
            });

        });
    </script>
    <script>
        $(document).ready(function () {

            // TEST RIDE FORM SUBMIT
            $("#testRideForm").submit(function (event) {
                event.preventDefault();

                const formData = $(this).serialize();

                $.ajax({
                    type: "POST",
                    url: '<?= base_url("home/submit_test_ride") ?>',
                    data: formData,
                    dataType: "json",

                    success: function (response) {
                        if (response.status === "success") {
                            $(".test-success").text(response.message).fadeIn();
                            $(".test-error").hide();
                            $("#testRideForm")[0].reset();
                        } else {
                            $(".test-error").html(response.message).fadeIn();
                            $(".test-success").hide();
                        }
                    },

                    error: function () {
                        $(".test-error").text("Something went wrong. Please try again.").fadeIn();
                        $(".test-success").hide();
                    }
                });
            });


            // BOOK SERVICE FORM SUBMIT
            $("#bookserviceForm").submit(function (event) {
                event.preventDefault();

                const formData = $(this).serialize();

                $.ajax({
                    type: "POST",
                    url: '<?= base_url("home/submit_book_service") ?>',
                    data: formData,
                    dataType: "json",

                    success: function (response) {
                        if (response.status === "success") {
                            $(".service-success").text(response.message).fadeIn();
                            $(".service-error").hide();
                            $("#bookserviceForm")[0].reset();
                        } else {
                            $(".service-error").html(response.message).fadeIn();
                            $(".service-success").hide();
                        }
                    },

                    error: function () {
                        $(".service-error").text("Something went wrong. Please try again.").fadeIn();
                        $(".service-success").hide();
                    }
                });
            });

        });
    </script>
    <script>
        $(document).ready(function () {

        // TEST RIDE FORM SUBMIT
        $("#contact-form").submit(function (event) {
            event.preventDefault();

            const formData = $(this).serialize();

            $.ajax({
                type: "POST",
                url: '<?= base_url("home/contact_form") ?>',
                data: formData,
                dataType: "json",

                success: function (response) {
                    if (response.status === "success") {
                        $(".test-success").text(response.message).fadeIn();
                        $(".test-error").hide();
                        $("#contact-form")[0].reset();
                    } else {
                        $(".test-error").html(response.message).fadeIn();
                        $(".test-success").hide();
                    }
                },

                error: function () {
                    $(".test-error").text("Something went wrong. Please try again.").fadeIn();
                    $(".test-success").hide();
                }
            });
        });
        });
    </script>