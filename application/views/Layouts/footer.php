<!-- Wrapper End -->
<!-- jquery-->
<script src="<?php echo base_url() ?>assets/js/jquery-2.2.4.min.js"></script>
<!-- Plugins js -->
<script src="<?php echo base_url() ?>assets/js/plugins.js"></script>
<!-- Popper js -->
<script src="<?php echo base_url() ?>assets/js/popper.js"></script>
<!-- Bootstrap js -->
<script src="<?php echo base_url() ?>assets/js/bootstrap.min.js"></script>
<!-- Nivo slider js -->
<script src="<?php echo base_url() ?>assets/vendor/slider/js/jquery.nivo.slider.js"></script>
<script src="<?php echo base_url() ?>assets/vendor/slider/home.js"></script>
<!-- Meanmenu Js -->
<script src="<?php echo base_url() ?>assets/js/jquery.meanmenu.min.js"></script>
<!-- Srollup js -->
<script src="<?php echo base_url() ?>assets/js/jquery.scrollUp.min.js"></script>
<!-- jquery.counterup js -->
<script src="<?php echo base_url() ?>assets/js/jquery.counterup.min.js"></script>
<script src="<?php echo base_url() ?>assets/js/waypoints.min.js"></script>
<!-- Countdown js -->
<script src="<?php echo base_url() ?>assets/js/jquery.countdown.min.js"></script>
<!-- Isotope js -->
<script src="<?php echo base_url() ?>assets/js/isotope.pkgd.min.js"></script>
<!-- Google Map js -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBtmXSwv4YmAKtcZyyad9W7D4AC08z0Rb4"></script>
<!-- Magnific Popup -->
<script src="<?php echo base_url() ?>assets/js/jquery.magnific-popup.min.js"></script>
<!-- Custom Js -->
<script src="<?php echo base_url() ?>assets/js/main.js"></script>

<script>
    $(document).ready(function() {
        $("#selectPlan1").click(function(e) {
            e.preventDefault();
            $("#plan2").addClass('d-none');
            $("#regForm1").removeClass('d-none');
            $("#selectPlan1").addClass('d-none');
        });

        $("#selectPlan2").click(function(e) {
            e.preventDefault();
            $("#plan1").addClass('d-none');
            $("#regForm2").removeClass('d-none');
            $("#selectPlan2").addClass('d-none');
        });

        $("#go-back").click(function(e) {
            e.preventDefault();
            $("#regForm1").addClass('d-none');
            $("#regForm2").addClass('d-none');
            $("#selectPlan1").removeClass('d-none');
            $("#selectPlan2").removeClass('d-none');
            $("#plan1").removeClass('d-none');
            $("#plan2").removeClass('d-none');
        });

        $("#go-back2").click(function(e) {
            e.preventDefault();
            $("#regForm1").addClass('d-none');
            $("#regForm2").addClass('d-none');
            $("#selectPlan1").removeClass('d-none');
            $("#selectPlan2").removeClass('d-none');
            $("#plan1").removeClass('d-none');
            $("#plan2").removeClass('d-none');
        });

        $("#paymentType").change(function(e) {
            e.preventDefault();
            var paymentType = $("#paymentType :selected").text();
            if (paymentType == "Pay Online") {
                document.getElementById('form1').action = ''
            } else {
                document.getElementById('form1').action = '<?php echo base_url('confirm-registration') ?>'
            }
            $.ajax({
                type: "POST",
                url: '<?php echo base_url('pages/check_payment_type'); ?>',
                data: {
                    'paymentType': paymentType,
                },
                success: function(data) {
                    $("#stepDiv").html(data);
                }
            });
            console.log(paymentType);
            return false;
        });

        $("#paymentType2").change(function(e) {
            e.preventDefault();
            var paymentType = $("#paymentType2 :selected").text();
            if (paymentType == "Pay Online") {
                document.getElementById('form2').action = ''
            } else {
                document.getElementById('form2').action = '<?php echo base_url('confirm-registration') ?>'
            }
            $.ajax({
                type: "POST",
                url: '<?php echo base_url('pages/check_payment_type'); ?>',
                data: {
                    'paymentType': paymentType,
                },
                success: function(data) {
                    $("#stepDiv2").html(data);
                }
            });
            console.log(paymentType);
            return false;
        });
    });
</script>

<script src="https://cdn.jsdelivr.net/npm/notyf@3/notyf.min.js"></script>


<!-- SHOW NOTIFY NOTIFICATION -->
<?php if ($this->session->flashdata('flash_error') != "") : ?>
    <script>
        // Create an instance of Notyf
        var notyf = new Notyf({
            duration: 10000,
            position: {
                x: 'right',
                y: 'top',
            }
        });
        // Display an error notification
        notyf.error('<?php echo $this->session->flashdata("flash_error"); ?>');
    </script>
<?php endif; ?>
<?php if ($this->session->flashdata('flash_message') != "") : ?>
    <script>
        // Create an instance of Notyf
        var notyf = new Notyf({
            duration: 10000,
            position: {
                x: 'right',
                y: 'top',
            }
        });
        // Display an success notification
        notyf.success('<?php echo $this->session->flashdata("flash_message"); ?>');
    </script>
<?php endif; ?>

</body>
</html>