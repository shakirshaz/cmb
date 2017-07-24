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
    </div>

</footer>