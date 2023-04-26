<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Police officers Mess | MP Police</title>
    <link rel="stylesheet" href="system/css/global.css">
    <link class="colour" rel="stylesheet" href="system/css/colour-blue.css">
    <link class="pattern" rel="stylesheet" href="system/css/pattern-china.css">
    <link class="layout" rel="stylesheet" href="system/css/layout-full.css">
    <link class="background" rel="stylesheet" href="system/css/backgrounds.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <script src="system/js/plugins.js"></script>
    <script src="system/js/global.js"></script>
    <style>
        .result {
            text-align: center;
            color: orange;
            font-size: 2em;
            font-weight: bold;
            margin-top: 1.5em;
            display: block;
        }

        input {
            border: 0;
            border-bottom: 2px solid #C0C0C0;
            outline: 0;
            color: #111111;
            width: 37px;
            padding: 0 5px;
            margin-right: 10px;
            text-align: center;
            font-size: 3em;
            cursor: pointer;
            will-change: border;
            transition: border .3s ease-in-out;
            -webkit-appearance: none;
            -moz-appearance: textfield;
        }

        input[type=number]::-webkit-inner-spin-button,
        input[type=number]::-webkit-outer-spin-button {
            -webkit-appearance: none;
            -moz-appearance: none;
            -moz-appearance:textfield;
            appearance: none;
            margin: 0;
        }

        input:focus {
            border: 0;
            border-bottom: 2px solid #ff6200;
        }

        input:disabled {
            background: #fff;
        }

        input:last-child {
            margin-right: 0;
        }

        .paintOrangeLine {
            border: 0;
            border-bottom: 2px solid #ff6200;
        }

        button {
            background: #ff6200;
            color: whiteSmoke;
            padding: 1em 2em;
            margin-top: 2em;
            border: 0;
            width: 40%;
            cursor: pointer;
            transition: opacity .3s ease-in-out;
            will-change: opacity;
        }

        button:hover {
            opacity: .8;
        }
    </style>
</head>
<body class="fullwidth">
<!-- Navigation | START -->
<div id="nav">
    <div class="centre">
        <a href="/" class="logo"><img alt="" src="system/images/logo.png" width="260px"  /></a>
        <nav>
            <ul>
                <li class="mobile"><a href="/book-now" class="navbook">Book Online</a></li>
                <li><a href="/">Home</a></li>
                <li><a href="#">About us</a>
                    <ul>
                        <li><a href="/about-us">Profile</a></li>
                        <li><a href="#">Management committee</a></li>
                        <li><a href="#">Rules & Regulations</a></li>
                    </ul>
                </li>
                <li><a href="#">Services</a>
                    <ul>
                        <li><a href="#">Sports</a></li>
                        <li><a href="#">Restaurant</a></li>
                        <li><a href="#">Bars</a></li>
                    </ul>
                </li>
                <li><a href="#">Facilities</a>
                    <ul>
                        <li><a href="#">Sports</a></li>
                        <li><a href="#">Restaurant</a></li>
                        <li><a href="#">Bars</a></li>
                    </ul>
                </li>
                <li><a href="#">Gallery</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="#" id="pay_bill" >Pay Bill</a></li>

            </ul>
            <a id="pull"><i class="fa fa-bars"></i></a>
        </nav>
        <a href="/book-now"  class="book"><span data-hover="Book Online">Book Online</span> <i class="fa fa-check-circle"></i></a>

        <div class="shadow"></div>
    </div>
</div>
<!-- Navigation | END -->
<div id="container">
@yield('content')
{{--    Main content here--}}

    <footer>
        <div id="footer">
            <div class="centre">
                <!-- Subscribe / Social | START -->
                <div class="news">
                    <div class="title"><span>News & Offers</span></div>
                    <div class="subscribe">
                        <form>
                            <input name="email" type="text" placeholder="Your email address" />
                            <button><span data-hover="Sign Up">Sign Up</span></button>
                        </form>
                    </div>
                    <div class="social">
                        <a href="#" title="Facebook"><i class="fa fa-facebook"></i></a>
                        <a href="#" title="Twitter"><i class="fa fa-twitter"></i></a>
                        <a href="#" title="Pinterest"><i class="fa fa-pinterest-p"></i></a>
                    </div>
                </div>
                <!-- Subscribe / Social | END -->
                <!-- Contact Details | START -->
                <div class="contact">
                    <p><strong class="phone">+91 8 3456 7890</strong><br />
                        <a href="mailto:stay@basehotel.com">stay@pom.com</a><br /><br />
                        <i class="fa fa-map-marker"></i>  7C26+CHF, Jahangirabad, <br />
                        Bhopal, Madhya Pradesh 462008<br />
                        <a href="#" target="_blank"><strong>Get Directions</strong></a></p>
                </div>
                <!-- Contact Details | END -->
                <div class="dark"></div>
            </div>
        </div>
        <!-- Footer Links | START -->
        <div id="footerlinks">
            <div class="centre">
                <span>Copyright &copy; <script>var d = new Date(); document.write(d.getFullYear());</script> <strong>Police Officers Mess</strong></span><a href="/">Home</a><a href="sitemap.html">Sitemap</a>
            </div>
        </div>
        <!-- Footer Links | END -->
    </footer>
    <!-- Footer | END -->
</div>

</body>
</html>
