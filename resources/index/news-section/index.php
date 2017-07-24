<?php

$news_instance = new DB_Connection();

$conn_news = $news_instance->connect();


$table = 'news';

$query = "SELECT * FROM $table ORDER BY id DESC LIMIT 3";

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

<section class="focus" id="focus">
    <div class="container">

        <!-- SECTION HEADER -->
        <div class="section-header">

            <!-- SECTION TITLE -->
            <h2 class="dark-text">Our News</h2>

            <!-- SHORT DESCRIPTION ABOUT THE SECTION -->
            <h6>
                We design &amp; develop qaulity products to help small &amp; medium level business.
            </h6>
        </div>
        <!-- / END SECTION HEADER -->

       <?php

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
                                <a href='" . $newsBlock[$i]['i_path'] . "' data-fancybox='news" . $i . "' class='more' title='" . $newsBlock[$i]['title'] . "' ><img src='" . $newsBlock[$i]['i_path'] . "'  alt='' width='320' height='400' class='img-thumbnail'/></a>
                           </center>
                           </div>
                           <div class='col-md-6'>
                           <center>
                              <h3 class='text-info'>" . $newsBlock[$i]['title'] . "</h3>
                              <p class='text-info'>" . $newsBlock[$i]['subtitle'] . "</p>
                              <div class='itemNews'>
                              " . $newsBlock[$i]['content'] . "
                              </div>
                              <p class='text-primary' style='float: left'>" . $newsBlock[$i]['names'] . "</p>
                              <p class='text-primary' style='float: right'>" . $newsBlock[$i]['date_posted'] . "</p>
                           </center>
                           </div>
                         </div>
                      </div>";


           if($i == ($counter_news-1)){
              echo '<a class="btn btn-info" href="resources/home/news">Read More News</a>';
           }




       }

       ?>


       </div>
        <!-- / END 4 FOCUS BOXES -->

    </div> <!-- / END CONTAINER -->
</section>  <!-- / END FOCUS SECTION -->