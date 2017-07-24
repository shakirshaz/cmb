<?php
require ('helpers/database.php');

//Global Variables

include('resources/index/getintouch.php');


?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="keywords" content="Cambridge College,Colombo 15,Mattakkuliya, Apple Holidays"/>
    <meta name="author" content="Cambridge College" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- =========================
     FAV AND TOUCH ICONS
    ============================== -->
    <link rel="icon" type="image/png" href="//localhost/cmb/assets/images/logos/logo-test.png">

    <!-- =========================
         STYLESHEETS
    ============================== -->
    <link rel="stylesheet" href="Assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="Assets/css/owl.theme.css">
    <link rel="stylesheet" href="Assets/css/owl.carousel.css">
    <link rel="stylesheet" href="Assets/css/jquery.vegas.min.css">
    <link rel="stylesheet" href="Assets/css/animate.min.css">

    <link rel="stylesheet" href="Assets/css/icon-fonts/styles.css">
    <link rel="stylesheet" href="Assets/css/pixeden-icons.css">
    <link rel="stylesheet" href="Assets/css/textColors.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- CUSTOM STYLES -->
    <link rel="stylesheet" href="Assets/css/styles.css">
    <!-- WEBFONT -->
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,400italic|Montserrat:700,400|Homemade+Apple' rel='stylesheet' type='text/css'>

    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->

    <!-- JQUERY -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

    <link rel="stylesheet" href="Assets/css/highlightsSlides.css">

    <script src="Assets/js/highlightsSlides.js"></script>

    <!-- FANCY BOX -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.0.47/jquery.fancybox.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.0.47/jquery.fancybox.min.js"></script>

    <style>
        .projects img{
            padding: 10px 10px !important;
        }
    </style>


</head>


<body>
<p>Testing GIT</p>
<!-- =========================
   PRE LOADER
============================== -->
<div class="preloader">
    <div class="status">&nbsp;</div>
</div>
<!-- =========================

   HOME SECTION
============================== -->
<header id="home" class="header">

    <!-- TOP BAR -->
    <div id="main-nav" class="navbar navbar-inverse bs-docs-nav" role="banner">
        <div class="container">
            <div class="navbar-header responsive-logo">
                <button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target="#bs-navbar-collapse">
                    <span aria-readonly="true"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="//localhost/cmb/#home">
                    <ol class="list-inline">
                        <li><img src="//localhost/cmb/assets/images/logos/logo-test.png" width="40" alt="Logo Of School"/></li>
                        <li>CAMBRIDGE COLLEGE</li>
                    </ol>
                </a>
            </div>
            <nav class="navbar-collapse collapse" role="navigation" id="bs-navbar-collapse">
                <ul style="float: right" class="nav navbar-nav navbar-right responsive-nav main-nav-list">
                    <li><a href="#home">HOME</a></li>
                    <li><a href="#aboutus">ABOUT US</a></li>
                    <li><a href="#features">HIGHLIGHTS</a></li>
                    <li><a href="#focus">NEWS</a></li>
                    <li><a href="#works">GALLERY</a></li>
                    <li><a href="#team">MANAGEMENT</a></li>
                    <li><a href="#testimonials">TESTIMONIALS</a></li>
                    <li><a href="#contact">CONTACT</a></li>
                </ul>
            </nav>
        </div>
    </div>
    <!-- / END TOP BAR -->

    <!-- BIG HEADING WITH CALL TO ACTION BUTTONS AND SHORT MESSAGES -->
    <div class="container">

        <!-- HEADING -->
        <h1 class="intro">CAMBRIDGE INTERNATIONAL COLLEGE</h1>
        <h3>Making Your Child World's Best</h3>

        <!-- CALL TO ACTION BUTTONS -->
        <div class="buttons inpage-scroll">
            <a href="#aboutus" class="btn btn-primary custom-button red-btn">Go Down</a>
        </div>

</header> <!-- / END HOME SECTION  -->


<!-- =========================
   ABOUT US SECTION
============================== -->
<?php include('./resources/index/aboutUs-section/index.php');   ?>


<!-- =========================
   HIGHLIGHTS SECTION
============================== -->
<?php include('./resources/index/highlights-section/index.php');   ?>


<!-- =========================
   NEWS SECTION
============================== -->
<?php include('./resources/index/news-section/index.php');   ?>


<!-- =========================
   GALLERY SECTION
============================== -->
<?php include('./resources/index/gallery-section/index.php');   ?>

<!-- =========================
   OUR MANAGEMENT TEAM SECTION
============================== -->
<?php include('./resources/index/management-section/index.php');   ?>


<!-- =========================
   TESTIMONIAL
============================== -->
<?php include('./resources/index/testimony-section/index.php');   ?>
<style>
    #form_status{
        position: fixed;top:77px;left:0;background-color: red;height:50px;width:400px;box-shadow: 0 0 4px 4px black;color: white;font-weight: bolder;
    }
    @keyframes fadeOutStatus {
        from{
            opacity: 1;
        }
        to{
            opacity: 0;
        }
    }

    .fade{
        animation-name: fadeOutStatus;
        animation-duration: 2s;
        animation-delay: 0s;
        animation-timing-function: ease-in;
        animation-iteration-count: 1;
    }
</style>
<div>
    <?php echo $status?>
</div>
<!-- =========================
   CONTACT US
============================== -->
<?php include('./resources/index/contact-section/index.php');   ?>



<!-- SCRIPTS -->
<script src="Assets/js/bootstrap.min.js"></script>
<script src="Assets/js/wow.min.js"></script>
<script src="Assets/js/jquery.nav.js"></script>
<script src="Assets/js/jquery.knob.js"></script>
<script src="Assets/js/owl.carousel.min.js"></script>
<script src="Assets/js/smoothscroll.js"></script>
<script src="Assets/js/jquery.vegas.min.js"></script>
<script src="Assets/js/readmore.js"></script>
<script src="Assets/js/validateContactForm.js"></script>
<script src="Assets/js/cambridge.js"></script>

</body>
</html>