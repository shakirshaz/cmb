<?php
session_start();

$contact_msg = new DB_Connection();
$conn_msg = $contact_msg->connect();

$name = '';
$email = '';
$subject = '';
$message = '';
$status ='';


if(isset($_POST['submit'])){

   if(!isset($_SESSION['unique'])){
                    $name = $_POST['name'];
                    $email = $_POST['email'];
                    $subject = $_POST['subject'];
                    $message = $_POST['message'];

                    $IP_address = $_SERVER['REMOTE_ADDR'];
                    $browser_type = $_SERVER['HTTP_USER_AGENT'];

                    //Assigning Session variable

                    $_SESSION['unique'] = $subject;

                    $table = 'message';

                    $query_msg = "INSERT INTO $table VALUES('','$name','$email','$subject','$message','$IP_address','$browser_type','0','')";

                    $inserted = mysqli_query($conn_msg,$query_msg);

                    if($inserted){

                    $status = "<div id='form_status'>Successfully message sent :)</div>";

                    }
                    else{
                    $status = "<div id='form_status' class='fade'>Try Again... :(</div>";
                    }
   }
   else if($_SESSION['unique'] <> $_POST['subject']){
                    $name = $_POST['name'];
                    $email = $_POST['email'];
                    $subject = $_POST['subject'];
                    $message = $_POST['message'];

                    $IP_address = $_SERVER['REMOTE_ADDR'];
                    $browser_type = $_SERVER['HTTP_USER_AGENT'];

                    //Assigning Session variable

                    $_SESSION['unique'] = $email;

                    $table = 'message';

                    $query_msg = "INSERT INTO $table VALUES('','$name','$email','$subject','$message','$IP_address','$browser_type','0','');";

                    $inserted = mysqli_query($conn_msg,$query_msg);

                    if($inserted){

                    $status = "<div id='form_status'>Successfully message sent :)</div>";

                    }
                    else{
                    $status = "<div id='form_status' class='fade'>Try Again... :(</div>";
                    }
   }else{
      $_SESSION['unique'] = "";
      header("Location: index.php");
   }

}


?>