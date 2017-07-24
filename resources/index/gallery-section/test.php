<?php
$gal_instance = new DB_Connection();

$conn_gallery = $gal_instance->connect();


$table = 'gallery';

//{{ General Meeting

$query_general_meeting = "SELECT * FROM $table WHERE category = 'general_meeting'"; //general meeting gallery

$result_general_meeting = mysqli_query($conn_gallery,$query_general_meeting);

$genenal_meeting[][] = "";
$init = 0;


while($row_general_meeting = mysqli_fetch_assoc($result_general_meeting)){
    $genenal_meeting[$init]['category'] = $row_general_meeting['category'];
    $genenal_meeting[$init]['image_path'] = $row_general_meeting['image_path'];
    $genenal_meeting[$init]['description'] = $row_general_meeting['description'];
    $genenal_meeting[$init]['alt'] = $row_general_meeting['alt'];
    $init++;
}
$counter_general_meeting = sizeof($genenal_meeting);

//}}

//{{ Sports Meet

$query_sport_meet = "SELECT * FROM $table WHERE category = 'sport_meet'"; //general meeting gallery

$result_sport_meet = mysqli_query($conn_gallery,$query_sport_meet);

$sport_meet[][] = "";
$init = 0;


while($row_sport_meet = mysqli_fetch_assoc($result_sport_meet)){
    $sport_meet[$init]['category'] = $row_sport_meet['category'];
    $sport_meet[$init]['image_path'] = $row_sport_meet['image_path'];
    $sport_meet[$init]['description'] = $row_sport_meet['description'];
    $sport_meet[$init]['alt'] = $row_sport_meet['alt'];
    $init++;
}
$counter_sport_meet = sizeof($sport_meet);

//}}


//{{ Kids Meet

$query_kids_meet = "SELECT * FROM $table WHERE category = 'kids_meet'"; //general meeting gallery

$result_kids_meet = mysqli_query($conn_gallery,$query_kids_meet);

$kids_meet[][] = "";
$init = 0;


while($row_kids_meet = mysqli_fetch_assoc($result_kids_meet)){
    $kids_meet[$init]['category'] = $row_kids_meet['category'];
    $kids_meet[$init]['image_path'] = $row_kids_meet['image_path'];
    $kids_meet[$init]['description'] = $row_kids_meet['description'];
    $kids_meet[$init]['alt'] = $row_kids_meet['alt'];
    $init++;
}
$counter_kids_meet = sizeof($kids_meet);

//}}


//{{ Award Ceremony

$query_award_ceremony = "SELECT * FROM $table WHERE category = 'award_ceremony'"; //general meeting gallery

$result_award_ceremony = mysqli_query($conn_gallery,$query_award_ceremony);

$award_ceremony[][] = "";
$init = 0;


while($row_award_ceremony = mysqli_fetch_assoc($result_award_ceremony)){
    $award_ceremony[$init]['category'] = $row_award_ceremony['category'];
    $award_ceremony[$init]['image_path'] = $row_award_ceremony['image_path'];
    $award_ceremony[$init]['description'] = $row_award_ceremony['description'];
    $award_ceremony[$init]['alt'] = $row_award_ceremony['alt'];
    $init++;
}
$counter_award_ceremony = sizeof($award_ceremony);

//}}


?>

<section class="works" id="works">
    <div class="container">

        <!-- SECTION HEADER -->
        <div class="section-header">

            <!-- SECTION TITLE -->
            <h2 class="dark-text">Gallery</h2>

            <!-- SHORT DESCRIPTION ABOUT THE SECTION -->
            <h6>
                School Gallery Block. Just take a look.
            </h6>
        </div>
        <!-- / END SECTION HEADER -->
        <div class="row projects">
            <div id="loader">
                <div class="loader-icon"></div>
            </div>
            <div class="col-md-12" id="portfolio-list">
                <!-- PORTFOLIO ITEMS-->
                <ul class="cbp-rfgrid">

                    <!-- GENERAL MEETING -->
                    <li class="wow fadeInRight animated" data-wow-offset="30" data-wow-duration="2s" data-wow-delay="0.25s">
                        <a data-fancybox="general_meeting" title="2017 Dec Meeting Held on 2017/02/16" class="more"href="//localhost/CambridgeCollege/assets/images/slideshow/1.jpg"><img src="//localhost/CambridgeCollege/assets/images/slideshow/1.jpg"  alt="project"/></a>
                        <div>
                            <h5 class="text-info"><strong>General Meetings</strong></h5>
                        </div>
                        <?php

                        for($i=0; $i < $counter_general_meeting;$i++){

                            echo "<a data-fancybox='".$genenal_meeting[$i]['category']."' title='".$genenal_meeting[$i]['description']."' class='more' href='".$image_root.$genenal_meeting[$i]['image_path']."'><img src='".$image_root.$genenal_meeting[$i]['category']."' style='display: none;' alt='".$genenal_meeting[$i]['alt']."'/></a>";

                        }

                        ?>
                    </li>
                    <!-- /  -->


                    <!-- SPORTS MEET -->
                    <li class="wow fadeInRight animated" data-wow-offset="30" data-wow-duration="2s" data-wow-delay="0.25s">
                        <a data-fancybox="sport_meet" title="2017 Dec Meeting Held on 2017/02/16" class="more"href="//localhost/CambridgeCollege/assets/images/slideshow/2.jpg"><img src="//localhost/CambridgeCollege/assets/images/slideshow/2.jpg"  alt="project"/></a>
                        <div>
                            <h5 class="text-info"><strong>Sports Meets</strong></h5>
                        </div>
                        <?php

                        for($i=0; $i < $counter_sport_meet;$i++){

                            echo "<a data-fancybox='".$sport_meet[$i]['category']."' title='".$sport_meet[$i]['description']."' class='more' href='".$image_root.$sport_meet[$i]['image_path']."'><img src='".$image_root.$sport_meet[$i]['category']."' style='display: none;' alt='".$sport_meet[$i]['alt']."'/></a>";

                        }

                        ?>
                    </li>
                    <!-- /  -->





                    <!-- KIDS MEET -->
                    <li class="wow fadeInRight animated" data-wow-offset="30" data-wow-duration="2s" data-wow-delay="0.25s">
                        <a data-fancybox="kids_meet" title="2017 Dec Meeting Held on 2017/02/16" class="more"href="//localhost/CambridgeCollege/assets/images/slideshow/2.jpg"><img src="//localhost/CambridgeCollege/assets/images/slideshow/2.jpg"  alt="project"/></a>
                        <div>
                            <h5 class="text-info"><strong>Kids Meets</strong></h5>
                        </div>
                        <?php

                        for($i=0; $i < $counter_kids_meet;$i++){

                            echo "<a data-fancybox='".$kids_meet[$i]['category']."' title='".$kids_meet[$i]['description']."' class='more' href='".$image_root.$kids_meet[$i]['image_path']."'><img src='".$image_root.$kids_meet[$i]['category']."' style='display: none;' alt='".$kids_meet[$i]['alt']."'/></a>";

                        }

                        ?>
                    </li>
                    <!-- /  -->

                    <!-- AWARD CEROMONEY -->
                    <li class="wow fadeInRight animated" data-wow-offset="30" data-wow-duration="2s" data-wow-delay="0.25s">
                        <a data-fancybox="award_ceremony" title="2017 Dec Meeting Held on 2017/02/16" class="more"href="//localhost/CambridgeCollege/assets/images/slideshow/2.jpg"><img src="//localhost/CambridgeCollege/assets/images/slideshow/2.jpg"  alt="project"/></a>
                        <div>
                            <h5 class="text-info"><strong>Award Ceremoney</strong></h5>
                        </div>
                        <?php

                        for($i=0; $i < $counter_award_ceremony;$i++){

                            echo "<a data-fancybox='".$award_ceremony[$i]['category']."' title='".$award_ceremony[$i]['description']."' class='more' href='".$image_root.$award_ceremony[$i]['image_path']."'><img src='".$image_root.$award_ceremony[$i]['category']."' style='display: none;' alt='".$award_ceremony[$i]['alt']."'/></a>";

                        }

                        ?>
                    </li>
                    <!-- /  -->





                    <!-- ... -->
                </ul>
            </div>
            <!-- END OF PORTFOLIO ITEMS-->
        </div>


    </div> <!-- / END CONTAINER -->
</section> <!-- / END WORKS SECTION -->




