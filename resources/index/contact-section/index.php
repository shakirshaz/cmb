<?php

$contact_instance = new DB_Connection();

$conn_contact = $contact_instance->connect();


$table = 'contact';

$query = "SELECT * FROM $table WHERE 1";

$result_contact = mysqli_query($conn_contact,$query);

while($row_contact = mysqli_fetch_assoc($result_contact)){

$email = $row_contact['email'];
$address = $row_contact['address'];
$tel = $row_contact['telephone'];
}


?>


<section class="contact-us" id="contact">
    <div class="container">

        <!-- SECTION HEADER -->
        <div class="section-header">

            <!-- SECTION TITLE -->
            <h2 class="white-text">Get in touch</h2>

            <!-- SHORT DESCRIPTION ABOUT THE SECTION -->
            <h6 class="white-text">
                Have any question? Drop us a message. We will get back to you in soon.
            </h6>
        </div>
        <!-- / END SECTION HEADER -->

        <!-- CONTACT FORM-->
        <div class="row">
            <form action="index.php" method="post" onsubmit="return validateForm()" name="contact">
                <div class="wow fadeInLeft animated" data-wow-offset="30" data-wow-duration="1.5s" data-wow-delay="0.15s">
                    <div class="col-lg-4 col-sm-4">
                        <input type="text" name="name" placeholder="Your Name" class="form-control input-box" id="name">
                    </div>
                    <div class="col-lg-4 col-sm-4">
                        <input type="email" name="email" placeholder="Your Email" class="form-control input-box" id="email">
                    </div>
                    <div class="col-lg-4 col-sm-4">
                        <input type="text" name="subject" placeholder="Subject" class="form-control input-box" id="subject">
                    </div>
                </div>

                <div class="col-md-12 wow fadeInRight animated" data-wow-offset="30" data-wow-duration="1.5s" data-wow-delay="0.15s">
                    <span class="pull-left"><i class="text-danger">*</i> Minimum 100 charcters required</span>
                    <textarea name="message" class="form-control textarea-box" placeholder="Your Message" id="message"></textarea>

                </div>

                <button type="submit" name="submit" class="btn btn-primary custom-button red-btn wow fadeInLeft animated" id="submit" data-wow-offset="30" data-wow-duration="1.5s" data-wow-delay="0.15s">Send Message</button>
            </form>



        </div>
        <!-- / END CONTACT FORM-->
    </div> <!-- / END CONTAINER -->
</section> <!-- / END CONTACT US SECTION-->

<!-- =========================
   FOOTER
============================== -->

<footer>
    <div class="container-fluid row">

      <center>
        <!-- COMPANY ADDRESS-->
        <div class="col-lg-3 company-details">
            <div class="icon-top red-text">
                <i class="fa fa-map-marker"></i>
            </div>
            <?php

            echo $address;

            ?>
        </div>

        <!-- COMPANY EMAIL-->
        <div class="col-lg-3 company-details">
            <div class="icon-top green-text">
                <i class="fa fa-envelope"></i>
            </div>
            <?php

            echo $email;

            ?>
        </div>

        <!-- COMPANY PHONE NUMBER -->
        <div class="col-lg-3 company-details">
            <div class="icon-top blue-text">
                <i class="fa fa-phone"></i>
            </div>
            <?php
            echo $tel;
            ?>
        </div>

        <!-- SOCIAL ICON AND COPYRIGHT -->
        <div class="col-lg-3 col-sm-3 company-details">
            <ul class="social">
                <li><a href=""><i class="fa fa-facebook"></i></a></li>
                <li><a href=""><i class="fa fa-twitter"></i></a></li>
                <li><a href=""><i class="fa fa-linkedin"></i></a></li>
            </ul>
            ©2017 Cambridge College
        </div>

       </center>
    </div> <!-- / END CONTAINER -->


    <div class="container-fluid row">
    <div class="col-lg-12">
    <iframe style="box-shadow: 0 0 4px 4px white;width: 100% !important;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15843.836302740707!2d79.85599671210305!3d6.953243947827813!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae258ee5e5478b7%3A0x5137c1a548f80d2a!2sCambridge+International+School!5e0!3m2!1sen!2slk!4v1498039628576" width="1200" height="200" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>
    </div>
</footer> <!-- / END FOOOTER  -->