<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title><?php echo $title; ?></title>

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/all.min.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="assets/css/nice-select.css">
    <link rel="stylesheet" href="assets/css/owl.min.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/flaticon.css">
    <link rel="stylesheet" href="assets/css/main.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="assets/images/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" href="assets/images/favicon/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="assets/images/favicon/favicon-16x16.png" sizes="16x16">
</head>
<body>
    <!--============= ScrollToTop Section Starts Here =============-->
    <div class="overlayer" id="overlayer">
        <div class="loader">
            <div class="loader-inner"></div>
        </div>
    </div>
    <a href="#0" class="scrollToTop"><i class="fas fa-angle-up"></i></a>
    <div class="overlay"></div>
    <!--============= ScrollToTop Section Ends Here =============-->


    <!--============= Header Section Starts Here =============-->
    <header class="header-section">
        <div class="container">
            <div class="header-wrapper">
                <div class="logo-area">
                    <div class="logo">
                        <a href="index.php">
                            <img src="assets/images/logo/logo.png" alt="logo">
                        </a>
                    </div>
                    <div class="support">
                        <a href="index.php">Help Center</a>
                    </div>
                </div>
                <ul class="menu">
                    <li>
                        <a href="knowledge.php">Knowledge Base</a>
                    </li>
                    <li>
                        <a href="faq.php">FAQ`s</a>
                    </li>
                    <li>
                        <a href="tipsTemplate.php">Tips & Tricks</a>
                    </li>
                    <li>
                        <a href="#">How To</a>
                        <ul class="submenu">
                            <li>
                                <a href="office365.php">Office 365</a>
                            </li>
                            <li>
                                <a href="powerapps.php">Power Apps</a>
                            </li>
                            <li>
                                <a href="teams.php">Teams</a>
                            </li>
                        </ul>
                    </li>

                    <li class="d-md-none text-center">
                        <a href="https://www.nkgwete.co.za/about-us/" class="m-0 header-button">About Us</a>
                    </li>
                </ul>
                <div class="header-bar d-lg-none">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
                <div class="header-right">
                    <a href="https://www.nkgwete.co.za/about-us/" class="header-button d-none d-md-inline-block">About Us</a>
                </div>
            </div>
        </div>
    </header>
    <!--============= Header Section Ends Here =============-->

<!--============= BEGIN CONTENT AREA  =================================================================-->

<?php

echo $content;

?>

<!--============= END OF CONTENT AREA  =================================================================-->

    <!--============= Find Section Starts Here =============-->
    <div class="find-section padding-top padding-bottom pos-rel oh">
        <div class="anime-bg bg_img" data-background="assets/images/banner/anime-bg.png"></div>
        <div class="container">
            <div class="section-header">
                <span class="cate">Didn’t Find What</span>
                <h2 class="title">You Were Looking For?</h2>
                <p>Chat with us or send us an email and Submit your query.</p>
            </div>
            <ul class="looking-wrapper">
                <li>
                    <a href="tel:0860724365">Chat With Us</a>
                </li>
                <li>
                    <a href="mailto:ITCARE@eskom.co.za">Send us an Email</a>
                </li>
                <li>
                    <a href="https://bcx-myit.onbmc.com/dwp/app/?user_domain=eskom">Get more help</a>
                </li>
            </ul>
        </div>
    </div>
    <!--============= Find Section Ends Here =============-->


    <!--============= Have Questions Section Starts Here =============-->
    <div class="have-questions-section mb--70--145">
        <div class="container">
            <div class="have-question-wrapper">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="have-question-content">
                            <h2 class="title">Still Have Questions?</h2>
                            <p>Our customer care team is here for you!</p>
                            <a href="mailto:ITCARE@eskom.co.za" class="custom-button">Contact Us</a>
                        </div>
                    </div>
                    <div class="right-thumb d-none d-lg-block">
                        <img src="assets/images/faq/have-questions.png" alt="faq">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--============= Have Questions Section Ends Here =============-->


    <!--============= Footer Section Starts Here =============-->
    <footer class="footer-section pt-70-145">
        <div class="dot-slider bg_img" data-background="assets/images/footer/footer.jpg"></div>
        <div class="container">
            <div class="footer-top cl-white padding-bottom padding-top">
                <div class="row mb--50 justify-content-between">
                    <div class="col-sm-12 col-lg-6">
                        <div class="footer-widget widget-about">
                            <div class="logo-area">
                                <div class="logo">
                                    <a href="index.ph"><img src="assets/images/logo/logo.png" alt="logo"></a>
                                </div>
                                <div class="support">
                                    <a href="index.php">Help Center</a>
                                </div>
                            </div>
                            <p>We are committed to delivering superior technology solutions to our customers</p>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-3 offset-lg-1">
                        <div class="footer-widget widget-link">
                            <h5 class="title">Menu</h5>
                            <ul>
                                <li>
                                    <a href="knowledge.php">Knowledge Base</a>
                                </li>
                                <li>
                                    <a href="faq.php">FAQ`s</a>
                                </li>
                                <li>
                                    <a href="teams.php">Training</a>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
            <div class="footer-bottom cl-white">
                <p>All Rights Reservered by <a href="https://www.nkgwete.co.za">Nkgwete IT Solutions</a> Copyright &copy; 2021</p>
            </div>
        </div>
    </footer>
    <!--============= Footer Section Ends Here =============-->

    <script src="assets/js/jquery-3.3.1.min.js"></script>
    <script src="assets/js/modernizr-3.6.0.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/waypoints.js"></script>
    <script src="assets/js/nice-select.js"></script>
    <script src="assets/js/owl.min.js"></script>
    <script src="assets/js/magnific-popup.min.js"></script>
    <script src="assets/js/main.js"></script>
</body>
</html>