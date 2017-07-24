<?php

require ('../../../helpers/database.php');



//Global Variables

$image_root = "../../../assets/images/";


$news_instance = new DB_Connection();

$conn_news = $news_instance->connect();


$table = 'news';

$query = "SELECT * FROM $table ORDER BY id DESC";

$result_news = mysqli_query($conn_news,$query);

$newsBlock[][] = "";

$init = 0;


while($row_news = mysqli_fetch_assoc($result_news)){
    $newsBlock[$init]['title'] = $row_news['title'];
    $newsBlock[$init]['subtitle'] = $row_news['subtitle'];
    $newsBlock[$init]['content'] = $row_news['content'];
    $newsBlock[$init]['names'] = $row_news['names_concerned'];
    $newsBlock[$init]['i_path'] = $row_news['image_path'];
    $newsBlock[$init]['date_posted'] = $row_news['posted_on'];
    $init++;
}
$counter_news = sizeof($newsBlock);
?>
<!doctype html>
<html lang="en">
<head>
    <title>News-Cambridge College</title>
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

    <!-- FANCY BOX -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.0.47/jquery.fancybox.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.0.47/jquery.fancybox.min.js"></script>


    <style>
        #newsFeed{
            margin: 100px 50px !important;
        }
        .newsBlock{
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


    <section id="newsFeed">
        <?php

        $back = "../../../";

        for($i = 0;$i< $counter_news;$i++){

            if(!isset($newsBlock[$i]['i_path'])) {

                echo "<div style='height: 350px !important;' class='panel'>
                 <div class='panel-body'></div>
                     <div>
                         <div class='text-danger'><strong><h3>No news @ the momenT ....... :(</h3></strong></div>
                    </div>
               </div>";

                break;

            }

            echo "<div class='row container-fluid'>
                          <div class='col-lg-12 col-sm-12 newsBlock'>
                               <div class='col-md-6'>
                               <center>
                                    <a href='".$back.$newsBlock[$i]['i_path']."' data-fancybox='news".$i."' class='more' title='".$newsBlock[$i]['title']."' ><img src='".$back.$newsBlock[$i]['i_path']."'  alt='' width='320' height='400' class='img-thumbnail'/></a>
                               </center>
                               </div>
                               <div class='col-md-6'>
                               <center>
                                  <h3 class='text-info'>".$newsBlock[$i]['title']."</h3>
                                  <p class='text-info'>".$newsBlock[$i]['subtitle']."</p>
                                  <div class='itemNews'>
                                  ".$newsBlock[$i]['content']."
                                  </div>
                                  <p class='text-primary' style='float: left'>".$newsBlock[$i]['names']."</p>
                                  <p class='text-primary' style='float: right'>".$newsBlock[$i]['date_posted']."</p>
                               </center>
                               </div>
                             </div>
                          </div>";


        }

        ?>
    </section>

    <?php

    include ('../../../helpers/footer.php');
    include ('../../../helpers/scripts.php');

    ?>



</body>
</html>