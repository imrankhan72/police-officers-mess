<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <!-- TITLE -->
    <title>Police Officers Mess</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="format-detection" content="telephone=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <link rel="shortcut icon" href="/assets/images/favicon.png">

    <!-- GOOGLE FONT -->
    <link href="https://fonts.googleapis.com/css?family=Hind:400,300,500,600%7cMontserrat:400,700" rel='stylesheet' type='text/css'>

    <!-- CSS LIBRARY -->
    <link rel="stylesheet" type="text/css" href="/assets/css/lib/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="/assets/css/lib/font-lotusicon.css">
    <link rel="stylesheet" type="text/css" href="/assets/css/lib/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/assets/css/lib/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="/assets/css/lib/jquery-ui.min.css">
    <link rel="stylesheet" type="text/css" href="/assets/css/lib/magnific-popup.css">
    <link rel="stylesheet" type="text/css" href="/assets/css/lib/settings.css">
    <link rel="stylesheet" type="text/css" href="/assets/css/lib/bootstrap-select.min.css">

    <!-- MAIN STYLE -->
    <link rel="stylesheet" type="text/css" href="/assets/css/style.css">

</head>

<body>
<!-- PRELOADER -->
<div id="preloader">
    <span class="preloader-dot"></span>
</div>
<!-- END / PRELOADER -->

<!-- PAGE WRAP -->
<div id="page-wrap">

    <!-- HEADER -->
    <header id="header">

        <!-- HEADER TOP -->
        <div class="header_top">
            <div class="container">
                <div class="header_left float-left">
                    <span><i class="lotus-icon-location"></i>  7C26+CHF, Jahangirabad, Bhopal, Madhya Pradesh</span>
                    <span><i class="lotus-icon-phone"></i> 1-548-854-8898</span>
                </div>
                <div class="header_right float-right">
                        <span class="login-register">
                            <a class="awe-btn awe-btn-custom" href="/pay-bill" style="border-right:3px solid #2C3F75;"><strong>Pay Bill</strong></a>
                            <a class="awe-btn awe-btn-custom" href="/book-now"><strong>Apply For Booking</strong></a>
                        </span>
                </div>
            </div>
        </div>
        <!-- END / HEADER TOP -->

        <!-- HEADER LOGO & MENU -->
        <div class="header_content" id="header_content">

            <div class="container">
                <!-- HEADER LOGO -->
                <div class="header_logo">
                    <a href="/"><img src="/assets/images/pom-logo-1.png" alt="logo"></a>
                </div>
                <!-- END / HEADER LOGO -->

                <!-- HEADER MENU -->
                <nav class="header_menu">
                    <ul class="menu">
                        <li class="current-menu-item"><a href="/">Home </a></li>
                        <li><a href="/">About <span class="fa fa-caret-down"></span></a>
                            <ul class="sub-menu">
                                <li><a href="/about-us">About Us</a></li>
                                <li><a href="/management-committee">Management Committee</a></li>
                                <li><a href="/rules-regulations">Rules & Regulations</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">Explore Mess<span class="fa fa-caret-down"></span></a>
                            <ul class="sub-menu">
                                <li><a href="/accommodations">Accommodations</a></li>
                                <li><a href="/banquets-lawns">Banquets & Lawn</a></li>
                                <li><a href="/tariff">Tariff</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">Facilities <span class="fa fa-caret-down"></span></a>
                            <ul class="sub-menu">
                                <li><a href="/sports">Sport</a></li>
                                <li><a href="/restaurants">Restaurant</a></li>
                            </ul>
                        </li>
{{--                        <li><a href="/gallery">Gallery</a></li>--}}
                        <li><a href="/contact-us">Contact</a></li>
                    </ul>
                </nav>
                <!-- END / HEADER MENU -->

                <!-- MENU BAR -->
                <span class="menu-bars">
                        <span></span>
                    </span>
                <!-- END / MENU BAR -->
            </div>
        </div>
        <!-- END / HEADER LOGO & MENU -->

    </header>
    <!-- END / HEADER -->

      @yield('content')

    <!-- FOOTER -->
    <footer id="footer">

        <!-- FOOTER TOP -->
        <div class="footer_top">
            <div class="container">
                <div class="row">

                    <!-- WIDGET MAILCHIMP -->
                    <div class="col-lg-9">
                        <div class="mailchimp">
                            <h4>Pay Bill</h4>
                            <div class="mailchimp-form">
                                <form action="#" method="POST">
                                    <input type="text" name="mobile" placeholder="Your 10 digit mobile number" class="input-text">
                                    <button class="awe-btn">Submit</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- END / WIDGET MAILCHIMP -->

                    <!-- WIDGET SOCIAL -->
                    <div class="col-lg-3">
                        <div class="social">
                            <div class="social-content">
                                <a href="#"><i class="fa fa-pinterest"></i></a>
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-google-plus"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- END / WIDGET SOCIAL -->

                </div>
            </div>
        </div>
        <!-- END / FOOTER TOP -->

        <!-- FOOTER CENTER -->
        <div class="footer_center">
            <div class="container">
                <div class="row">

                    <div class="col-xs-12 col-lg-5">
                        <div class="widget widget_logo">
                            <div class="widget-logo">
                                <!--<div class="img">
                                    <a href="#"><img src="/assets/images/logo-footer.png" alt=""></a>
                                </div>-->
                                <div class="text">
                                    <p><i class="lotus-icon-location"></i>   7C26+CHF, Jahangirabad, <br>Bhopal, Madhya Pradesh</p>
                                    <p><i class="lotus-icon-phone"></i> 1-548-854-8898</p>
                                    <p><i class="fa fa-envelope-o"></i> <a href="/cdn-cgi/l/email-protection#caa2afa6a6a58abea2afa6a5bebfb9a2a5beafa6e4a9a5a7"><span class="__cf_email__" data-cfemail="adc5c8c1c1c2edd9c5c8c1c2d9d8dec5c2d9c8c183cec2c0">[email&#160;protected]</span></a></p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xs-4 col-lg-2">
                        <div class="widget">
                            <h4 class="widget-title">Page site</h4>
                            <ul>
                                <li><a href="#">Accommodations</a></li>
                                <li><a href="#">Banquetes & Lawn</a></li>
                                <li><a href="#">Tariff</a></li>
                                <li><a href="#">Facilities</a></li>
                                <li><a href="#">Gallery</a></li>
                                <li><a href="#">Faq's</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-xs-4 col-lg-2">
                        <div class="widget">
                            <h4 class="widget-title">ABOUT</h4>
                            <ul>
                                <li><a href="">About Us</a></li>
                                <li><a href="">Committee Member</a></li>
                                <li><a href="">Rules & Regulations</a></li>
                                <li><a href="">Contact Us</a></li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- END / FOOTER CENTER -->

        <!-- FOOTER BOTTOM -->
        <div class="footer_bottom">
            <div class="container">
                <p>&copy; 2023 Police Officers' Mess.  All rights reserved.</p>
            </div>
        </div>
        <!-- END / FOOTER BOTTOM -->

    </footer>
    <!-- END / FOOTER -->

</div>
<!-- END / PAGE WRAP -->


<!-- LOAD JQUERY -->
<script type="text/javascript" src="/assets/js/lib/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="/assets/js/lib/jquery-ui.min.js"></script>
<script type="text/javascript" src="/assets/js/lib/bootstrap.min.js"></script>
<script type="text/javascript" src="/assets/js/lib/isotope.pkgd.min.js"></script>
<script type="text/javascript" src="/assets/js/lib/jquery.themepunch.revolution.min.js"></script>
<script type="text/javascript" src="/assets/js/lib/jquery.themepunch.tools.min.js"></script>
<script type="text/javascript" src="/assets/js/lib/owl.carousel.js"></script>
<script type="text/javascript" src="/assets/js/lib/jquery.appear.min.js"></script>
<script type="text/javascript" src="/assets/js/lib/jquery.parallax-1.1.3.js"></script>
<script type="text/javascript" src="/assets/js/lib/jquery.magnific-popup.min.js"></script>
<script type="text/javascript" src="/assets/js/lib/SmoothScroll.js"></script>

<!-- Custom jQuery -->
<script type="text/javascript" src="/assets/js/scripts.js"></script>
<!-- Start of queryable.xyz script -->
<script> window.embedId="9a3f5559-e313-4e45-8e92-650918e95c5c"; </script>
<script src="https://query-able.xyz/embed.js"></script>
<!-- End of queryable.xyz script -->    
</body>
</html>
