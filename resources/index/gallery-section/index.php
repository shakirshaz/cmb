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
                    <center>

                    <!-- GENERAL MEETING -->

                    <?php


                    $gal_instance = new DB_Connection();

                    $conn_gallery = $gal_instance->connect();


                    $table = 'gallery';


                    $category[] = '';

                    $result_category = mysqli_query($conn_gallery,'SELECT category FROM category WHERE TRUE');

                    while ($row_category = mysqli_fetch_assoc($result_category)){
                        $category[] = $row_category['category'];
                    }
                    $category_count = sizeof($category);


                    for($i=0; $i<$category_count; $i++) {

                        global $table,$category,$conn_gallery,$gal_instance;


                        echo '<li class="wow fadeInRight animated" data-wow-offset="30" data-wow-duration="2s" data-wow-delay="0.25s">';

                        $query = "SELECT * FROM $table WHERE category = '$category[$i]' ORDER BY id DESC ";

                        $result = mysqli_query($conn_gallery, $query);


                        $starter = 0;

                        while ($row = mysqli_fetch_assoc($result)) {
                            if($starter == 0){
                                echo '<a data-fancybox="' . $category[$i] . '" title="' . $row["description"] . '" class="more" href="' . $row["image_path"] . '"><img src="' .$row["image_path"] . '"  alt="' . $row["alt"] . '"/></a>';
                                echo '<div>
                            <h5 class="text-info"><strong>'.$category[$i].'</strong></h5></div>';
                            }else {

                                echo '<a data-fancybox="' . $category[$i] . '" title="' . $row["description"] . '" style="display: none;" class="more" href="' . $row["image_path"] . '"><img src="' . $row["image_path"] . '"  alt="' . $row["alt"] . '"/></a>';
                            }

                            $starter++;

                        }

                        echo '</li>';



                    }

                    ?>

                    <!-- /  -->
                    </center>
                </ul>
              </center>
            <!-- END OF PORTFOLIO ITEMS-->
        </div>


    </div> <!-- / END CONTAINER -->
</section> <!-- / END WORKS SECTION -->




