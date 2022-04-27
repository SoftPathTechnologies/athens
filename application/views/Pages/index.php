<div id="wrapper" class="wrapper">
    <!-- Header Area Start Here -->
    <header>
        <div id="header-one" class="header-area header-fixed full-width-compress">
            <div class="main-menu-area" id="sticker">
                <div class="container-fluid">
                    <div class="row no-gutters d-flex align-items-center">
                        <div class="col-lg-2 col-md-2 d-none d-lg-block">
                            <div class="logo-area">
                                <a href="<?php echo base_url() ?>">
                                    <img src="<?php echo base_url() ?>assets/img/logo.png" alt="logo">
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-7 col-md-6 possition-static">
                            <div class="eventalk-main-menu">
                                <nav class="d-none d-lg-block">
                                    <ul>
                                        <li class="current">
                                            <a href="<?php echo base_url() ?>">Home</a>

                                        </li>
                                        <li class="menu-justify">
                                            <a href="#about" data-bs-spy="scroll" title="About">About Event</a>
                                        </li>
                                        <li>
                                            <a href="#speakers" data-bs-spy="scroll" title="Speakers">Speakers</a>
                                        </li>

                                        <li>
                                            <a href="<?php echo base_url('contact') ?>">Contact</a>
                                        </li>
                                    </ul>
                                </nav>
                                <!-- Mobile Menu start -->
                                <nav id="dropdown" class="d-md-none">
                                    <ul>
                                        <li>
                                            <a href="<?php echo base_url() ?>">Home</a>
                                        </li>
                                        <li>
                                            <a href="#about" data-bs-spy="scroll" title="About">About Event</a>
                                        </li>
                                        <li>
                                            <a href="#speakers" data-bs-spy="scroll" title="Speakers">Speakers</a>
                                        </li>

                                        <li>
                                            <a href="<?php echo base_url('contact') ?>">Contact</a>
                                        </li>

                                    </ul>
                                </nav>
                                <!-- Mobile Menu End -->
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 d-none d-lg-block">
                            <ul class="header-action-items">
                                <li>
                                    <a href="#register" data-bs-spy="scroll" title="Register" class="btn-fill size-xs color-yellow border-radius-5">Register</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Header Area End Here -->
    <!-- Slider Area Start Here -->
    <div class="slider-area slider-direction-layout1 slider-layout1 overlay-slider">
        <div class="bend niceties preview-1">
            <div id="ensign-nivoslider-1" class="slides">
                <img src="<?php echo base_url() ?>assets/img/slider/university.jpg" alt="slider" title="#slider-direction-1" />
                <img src="<?php echo base_url() ?>assets/img/slider/greece.jpg" alt="slider" title="#slider-direction-2" />
                <img src="<?php echo base_url() ?>assets/img/slider/slide1-3.jpg" alt="slider" title="#slider-direction-3" />
            </div>
            <div id="slider-direction-1" class="t-cn slider-direction">
                <div class="slider-content s-tb slide-1">
                    <div class="title-container s-tb-c title-light">
                        <div class="container text-center">
                            <div class="slider-big-text first-line">
                                <p>Lifestyle Diseases</p>
                            </div>
                            <div class="slider-big-text second-line">
                                <p>in 2022 and Beyond</p>
                            </div>
                            <h3 class="text-white fontweight-bold">Evolving paradigm for addressing disease burden in Africa </h3>
                            <div class="slider-sub-text third-line">
                                <ul>
                                    <li>16 - 18 May, 2022</li>
                                    <li>National and Kapodistrian University of Athens, Greece</li>
                                </ul>
                            </div>
                            <div class="slider-btn-area forth-line">
                                <a   href="#register" data-bs-spy="scroll" class="btn-ghost color-yellow border-radius-5">Register for Event Now!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Slider Area End Here -->
    <!-- Countdown Area Start Here -->
    <section class="full-width-container countdown-layout1">
        <div class="container-fluid">
            <div id="countdown"></div>
        </div>
    </section>
    <!-- Countdown Area End Here -->
    <!-- About Area Start Here -->
    <section id="about" class="section-space-equal bg-light">
        <div class="container">
            <div class="about-layout1">
                <img src="<?php echo base_url() ?>assets/img/about/about-logo.png" alt="logo" class="img-fluid">
                <p style="font-size: 15pt;">
                    Africa is focussing bulk of its health strengthening efforts in addressing the effect of COVID 19 on its teeming population.There seems to be a bit of neglect in addressing
                    the parallel rise in lifestyle diseases as non-communicable diseases like diabetes,
                    cardiovascular disease, Asthma and cancer are wreaking havoc. Smoking, substance abuse, poor dietary routines has been identified as the leading
                    cause of preventable diseases and death around the world and Africa’s rapidly
                    changing lifestyles is a cause for concern. Moreover, the psychological effect of
                    COVID-19, poverty, unemployment, food shortage, climate change, migration and
                    insecurity in Africa attracts poor public health/system's response compared to the
                    western climes.
                </p>
                <p style="font-size: 15pt;">To achieve the sustainable development goal, policy-makers need the best
                    available evidence to make informed health policy decisions and to determine
                    how to efficiently allocate scarce resources on highlighted areas.
                </p>
                <a href="#" title="Buy Your Ticket" class="btn-fill color-yellow border-radius-5"><i class="fa fa-download mx-2"></i> Download Conference Details</a>
            </div>
        </div>
    </section>
    <!-- About Page Area End Here -->
    <!-- Speaker Area Start Here -->
    <section id="speakers" class="section-space-default-less54 overlay-icon-layout3 bg-common bg-primary" style="background-image: url(<?php echo base_url() ?>assets/img/figure/figure2.png);">
        <div class="container zindex-up">
            <div class="section-heading title-black color-light text-center">
                <h2>Event Speakers</h2>
                <p>Well seasoned speakers will be delivering notable discourse on the subject during this Event. See the list of speakers.</p>
            </div>
            <div class="row">
                <?php 
                        foreach($speakers as $speaker): 
                ?>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-6 col-mb-12">
                        <div class="speaker-layout1">
                            <div class="item-img">
                                <img src="<?php echo $this->crud_model->get_image_url('speakers', $speaker['id']) ?>" alt="speaker" style="height: 280px; " class="img-fluid rounded-circle">
                                <div class="item-social" style="overflow-wrap: break-word; padding:40px">
                                       <p style="color: #000;"><?php echo $speaker['portfolio'] ?></p>
                                </div>
                            </div>
                            <div class="item-title">
                                <h3 class="title-medium size-lg color-light hover-yellow">
                                    <a href="#"><?php echo $speaker['name'] ?></a>
                                </h3>
                            </div>
                        </div>
                    </div>
               <?php endforeach; ?>
            </div>
        </div>
    </section>
    <!-- Speaker Area End Here -->

    <!-- Pricing Plan Area Start Here -->
    <style>
        .form-control {
            font-size: 16px;
            padding: 6px 20px;
            border: none;
            -webkit-border-radius: 4px !important;
            -moz-border-radius: 4px !important;
            -ms-border-radius: 4px !important;
            -o-border-radius: 4px !important;
            border-radius: 4px !important;
            color: #111111;
            min-height: 55px;
            -webkit-box-shadow: 0px 1px 0px 0px #e4e4e4;
            -moz-box-shadow: 0px 1px 0px 0px #e4e4e4;
            box-shadow: 0px 1px 0px 0px #e4e4e4;
            margin-top: 20px;
        }
    </style>
    <section id="register" class="section-space-default-less30 bg-accent overlay-icon-layout2">
        <div class="container zindex-up">
            <div class="section-heading title-black color-dark text-center">
                <h2>Seminar Registration</h2>
                <p>Select any of the Plan Category below to register for this Seminar<span class="text-info">(Please Provide accurate details)</span></p>
            </div>
            <div class="d-flex row justify-content-center">

                <div id="plan1" class="col-md-4 col-sm-12">
                    <div class="price-table-layout1">
                        <div class="item-wrapper">
                            <div class="item-title">
                                <h3 class="title-medium color-dark text-uppercase">Virtual</h3>
                            </div>
                            <div class="item-price">150
                                <span class="currency">€</span>
                            </div>
                            <div class="item-body">
                                <ul>
                                    <li>Online Attendance</li>
                                    <li>Certificate</li>
                                    <li>Workshop</li>
                                </ul>
                            </div>
                            <a href="#" id="selectPlan1" title="Select Plan" class="btn-fill size-md color-yellow border-radius-5 mt-auto">Select Plan</a>
                        </div>
                    </div>
                </div>
                
                <div id="regForm1" class="col-md-8 col-sm-12  d-none">
                    <div class="price-table-layout1" style="text-align: left;">
                        <div class="item-wrapper ">
                            <p style="margin-bottom:20px; margin-left:20px; font-weight: bolder;" id="go-back" href="#"> <i class="fa fa-arrow-left"></i> Go Back</p>
                            <form id="form1" method="post" action="">
                                <h3 class="text-center">Event Registration</h3>
                                <input type="hidden" class="form-control" value="Virtual" name="plan" required>
                                <div class="form1 text-start">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <input type="text" placeholder="Enter Fullname" class="form-control" name="fullname" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <input type="email" placeholder="Enter Email Address" class="form-control" name="email" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <input type="text" placeholder="Organization" class="form-control" name="organization" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <input type="text" placeholder="Designation" class="form-control" name="designation" required>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <select name="country" required class="form-control">
                                            <option>Select Country</option>
                                            <?php foreach ($countries as $country) : ?>
                                                <option><?php echo $country['nicename'] ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <select id="paymentType" class="form-control" required name="payment">
                                            <option value="">Select Payment Method</option>
                                            <option>Direct Bank Transfer</option>
                                            <option>Pay Online</option>
                                        </select>
                                    </div>

                                </div>
                                <div id="stepDiv" class="text-center" style="margin-top: 20px;">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <div id="plan2" class="col-md-4 col-sm-12">
                    <div class="price-table-layout1">
                        <div class="item-wrapper">
                            <div class="item-title">
                                <h3 class="title-medium color-dark text-uppercase">In-Person</h3>
                            </div>
                            <div class="item-price">955
                                <span class="currency">€</span>
                            </div>
                            <div class="item-body">
                                <ul>
                                    <li>Certificate</li>
                                    <li>Workshop</li>
                                    <li>Accommodation</li>
                                </ul>
                            </div>
                            <a href="#" id="selectPlan2" title="Select Plan" class="btn-fill size-md color-yellow border-radius-5">Select Plan</a>
                        </div>
                    </div>
                </div>
                <div id="regForm2" class="col-md-8 col-sm-12 d-none">
                    <div class="price-table-layout1" style="text-align: left;">
                        <div class="item-wrapper ">
                            <p style="margin-bottom:20px; margin-left:20px; font-weight: bolder;" id="go-back2" href="#"> <i class="fa fa-arrow-left"></i> Go Back</p>
                            <form id="form2" method="post" action="">
                                <h3 class="text-center">Event Registration</h3>
                                <input type="hidden" class="form-control" value="In-Person" name="plan" required>
                                <div class="form1 text-start">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <input type="text" placeholder="Enter Fullname" class="form-control" name="fullname" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <input type="email" placeholder="Enter Email Address" class="form-control" name="email" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <input type="text" placeholder="Organization" class="form-control" name="organization" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <input type="text" placeholder="Designation" class="form-control" name="designation" required>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <select name="country" required class="form-control">
                                            <option>Select Country</option>
                                            <?php foreach ($countries as $country) : ?>
                                                <option><?php echo $country['nicename'] ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <select id="paymentType2" class="form-control" required name="payment">
                                            <option value="">Select Payment Method</option>
                                            <option>Direct Bank Transfer</option>
                                            <option>Pay Online</option>
                                        </select>
                                    </div>

                                </div>
                                <div id="stepDiv2" class="text-center" style="margin-top: 20px;">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Pricing Plan Area End Here -->
    <!-- Progress Area Start Here -->
    <section class="progress-section-space bg-common progress-bg-color" style="background-image: url(<?php echo base_url() ?>assets/img/figure/figure1.png);">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-12">
                    <div class="progress-layout1">
                        <div class="media">
                            <div class="item-icon">
                                <i class="fa fa-map-marker" aria-hidden="true"></i>
                            </div>
                            <div class="media-body">
                                <h3>National And Kapodistrian University Of Athens, </h3>
                                <p>Greece</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-12">
                    <div class="progress-layout1">
                        <div class="media">
                            <div class="item-icon">
                                <i class="fa fa-users" aria-hidden="true"></i>
                            </div>
                            <div class="media-body">
                                <h3>20+ Speakers</h3>
                                <p>Speakers would comprise a mix of high profile academics, professors, researchers, industry experts, policy makers from Greece and Nigeria.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-12">
                    <div class="progress-layout1">
                        <div class="media">
                            <div class="item-icon">
                                <i class="fa fa-clone" aria-hidden="true"></i>
                            </div>
                            <div class="media-body">
                                <h3>2+ Main Sponsors</h3>
                                <p></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Progress Area End Here -->

    <!-- Map Area Start Here -->
    <section class="full-width-container">
        <div class="container-fluid">
            <div class="google-map-area">
                <div style="width:100%; height:496px;"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d29898190.850621514!2d-7.5784618520902916!3d23.829922249184843!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14a1bd3a2dbf1ac5%3A0x9437dcc2e294da4d!2sNational%20and%20Kapodistrian%20University%20of%20Athens!5e0!3m2!1sen!2sng!4v1639509076013!5m2!1sen!2sng" width="100%" height="496px" style="border:0;" allowfullscreen="" loading="lazy"></iframe></div>
                <div class="upcoming-event-layout1">
                    <h2>AGEFADD 3-DAY HEALTH
                        <br> SEMINAR 2022
                    </h2>
                    <div class="date">16 - 18 May, 2022</div>
                    <p>National And Kapodistrian <br>University Of Athens, Greece</p>
                </div>
            </div>
        </div>
    </section>
    <!-- Map Area End Here -->

    <!-- Footer Area Start Here -->
    <footer>
        <div class="footer-layout1 bg-light">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <a href="<?php echo base_url() ?>" class="footer-logo">
                            <img src="<?php echo base_url() ?>assets/img/logo-dark.png" alt="logo" class="img-fluid">
                        </a>
                        <p>© <script>
                                document.write(new Date().getFullYear())
                            </script> All Rights Reserved. Designed by
                            <a target="_blank" href="https://www.softpathtech.net/" rel="nofollow">
                                SoftPath Technologies</a>
                        </p>

                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Area End Here -->
</div>