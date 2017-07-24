<!doctype html>
<html lang="en">
<head>
    <title>Chairman-Cambridge College</title>
    <meta charset="UTF-8">
    <meta name="keywords" content="Cambridge College,Colombo 15,Mattakkuliya, Apple Holidays"/>
    <meta name="author" content="Cambridge College" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- =========================
     FAV AND TOUCH ICONS
    ============================== -->
    <link rel="icon" type="image/png" href="../../../assets/images/logos/logo-test.png">
    <!-- =========================
         STYLESHEETS
    ============================== -->
    <link rel="stylesheet" href="../../../Assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../../Assets/css/owl.theme.css">
    <link rel="stylesheet" href="../../../Assets/css/owl.carousel.css">
    <link rel="stylesheet" href="../../../Assets/css/jquery.vegas.min.css">
    <link rel="stylesheet" href="../../../Assets/css/animate.min.css">

    <link rel="stylesheet" href="../../../Assets/css/icon-fonts/styles.css">
    <link rel="stylesheet" href="../../../Assets/css/pixeden-icons.css">
    <link rel="stylesheet" href="../../../Assets/css/textColors.css">
    <link rel="stylesheet" href="../../../Assets/css/managementSlides.css">

    <!-- CUSTOM STYLES -->
    <link rel="stylesheet" href="../../../Assets/css/styles.css">
    <!--<link rel="stylesheet" href="../../../Assets/css/responsive.css">-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">



    <!-- WEBFONT -->
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,400italic|Montserrat:700,400|Homemade+Apple' rel='stylesheet' type='text/css'>

    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->

    <!-- JQUERY -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <style>
        #profile{
            margin: 70px 50px !important;
        }
        .sliderBlock{
            background-color: white;
        }

        footer{
            margin-top: 500px;
        }
    </style>
</head>


<body>
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
                <button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target="#bs-navbar-collapse-2">
                    <span aria-readonly="true"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="../../../#home">
                    <ol class="list-inline">
                        <li><img src="../../../assets/images/logos/logo-test.png" width="40" alt="Logo Of School"/></li>
                        <li>CAMBRIDGE COLLEGE</li>
                    </ol>
                </a>
            </div>
            <nav class="navbar-collapse collapse" role="navigation" id="bs-navbar-collapse-2">
                <ul style="float: right" class="nav navbar-nav navbar-right responsive-nav main-nav-list">
                    <li><a href="../../../#aboutus">ABOUT US</a></li>
                    <li><a href="../../../#features">HIGHLIGHTS</a></li>
                    <li><a href="../../../#focus">NEWS</a></li>
                    <li><a href="../../../#works">GALLERY</a></li>
                    <li><a href="../../../#team">MANAGEMENT</a></li>
                    <li><a href="../../../#testimonials">TESTIMONIALS</a></li>
                    <li><a href="../../../#contact">CONTACT</a></li>
                </ul>
            </nav>
        </div>
    </div>
    <!-- / END TOP BAR -->

    <section id="profile">
        <div class="row container-flud">
            <div class="col-lg-12 col-sm-12 sliderBlock">
                <?php require('../../managementSlides/managementSlides.html') ?>
            </div>
        </div>
        <div class="container-flud" style="background-color: white;box-shadow: 0 0 4px 4px black;padding-top: 100px">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <center>
                        <div class="container">
                            <img class="thumbnail" src="../../../assets/images/messages/qEbaqFhu.jpg" alt="founder" width="200"/>
                            <hr class="underbar">
                        </div>
                        <h6 class="text-info"><strong><i>Mrs. Pradeep Kumar</i></strong></h6>
                        <p style="padding: 30px 50px;" class="w3-left-align">
                            <i class="w3-text-blue">Mr P. Senanayake was started his primary and secondary H/Gatamanna Wijaya Central college. He could increase his talents and gained so many achievements from his school. He did his A/L in commerce stream and obtained the best result. After finished his school life he could entered to a Beliatta Technical College and received a higher Diploma in Commerce with English medium in 1988. He started his teaching career from H/Suriyawawa National School in 1989.Then he entered the Maharagama Teaching College and obtained the teaching certificate in Commerce. After the training he entered in to the H/Gatamanna Wijaya Central College as a commerce teacher in 1995 and then he moved to his current school Mahanama College = Colombo in 2001. He is holding many responsibilities and designation in Mahanama College. He is the sectional head of grade 10/11, treasure of the SDS and working as a Assistant Principal.</i>
                        </p>
                    </center>
                </div>
            </div>

    </section>

    <?php
    include ('../../../helpers/database.php');
    include ('../../../helpers/footer.php');
    include ('../../../helpers/scripts.php');

    ?>

</body>
</html>