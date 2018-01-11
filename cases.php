<?php
  include('asession.php');
  $email = $row['email'];
 ?>

<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="widtd=device-widtd, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="autdor" content="">
    <title>Home | Flat tdeme</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">




	</head>        <!--/head-->
<body>
  <?php
    if(isset($_SESSION['login_staff'])){
      include "stmenu.php";
    }else if(isset($_SESSION['login_admin'])){
      include "admenu.php";
    }

   ?>


   <section id="title" class="emerald">
         <div class="container">
             <div class="row">
                 <div class="col-sm-6">
                     <h1>Pending cases</h1>
                 </div>
             </div>
         </div>
     </section><!--/#title-->

<?php
date_default_timezone_set('Asia/Kolkata');
 ?>

<?php
include 'connect.php';
$ngoid = $row['ngoid'];
$q = mysql_query("SELECT * from child where ngoid='$ngoid'");
while($get = mysql_fetch_assoc($q)){
  $kid = $get['kid'];
  $adhid = $get['adhid'];

  $query = mysql_query("SELECT * from cases where kid='$kid'");
  $row = mysql_fetch_assoc($query);
    if($row){

    ?>
<br><br>
  <div class="container">
    <div class="row">
      <div class="col-sm-2"></div>
      <div class="col-sm-4">
        <p><strong>Kid Adhaar ID : </strong><?php echo $adhid; ?></p>
        <p><strong>Kid ID : </strong><?php echo $row['kid']; ?></p>
        <p><strong>Kid Name : </strong><?php echo $get['name']; ?></p>
      </div>
      <div class="col-sm-4">
        <p><strong>Case ID : </strong><?php echo $row['caseid']; ?></p>
        <p><strong>Date of Hearing : </strong><?php echo $row['date_of_hearing']; ?></p>
        <p><strong>Case Details : </strong><?php echo $row['case_info']; ?></p>
      </div>
      <div class="col-sm-2"></div>
    </div>
  </div>
  <hr width="70%">
    <?php
  }else{
    ?>
    <center><h2>No cases are pending.</h2></center>
    <?php
  }
  $date_of_hearing = $row['date_of_hearing'];
  $sysdate = date('Y/m/d');

  $date1 = new DateTime($date_of_hearing);
  $date2 = new DateTime($sysdate);
  $interval = $date1->diff($date2);
  $days = $interval->days;
  if($days < 10){

    // $to = $email;
    // $subject = "Case date approaching";
    //
    // $message = "<p>This is to inform you that a case with ID: " $row['caseid'] " is approaching its date. </p>";
    // $message .= "<p>Date: " $row['date_of_hearing'] "</p>";
    // $message .= "<p>Case Info: " $row['case_info'] "</p>";
    //
    // $header = "From: www.google.com \r\n";
    // $header .= "Content-type: text/html \r\n";
    //
    // $test = mail($to, $subject, $message, $header);
    // if($test){
    //
    // }else{
    //
    // }
  }
}

?>

     <footer id="footer" class="midnight-blue" style="position:fixed;width:100%;bottom:0;">
          <div class="container">
              <div class="row">
                  <div class="col-sm-6">
                      &copy; 2018 <a target="_blank" >VOID</a>. All Rights Reserved.
                  </div>
                  <div class="col-sm-6">
                      <ul class="pull-right">
                          <li><a id="gototop" class="gototop" href="#"><i class="icon-chevron-up"></i></a></li><!--#gototop-->
                      </ul>
                  </div>
              </div>
          </div>
      </footer><!--/#footer-->

      <script src="js/jquery.js"></script>
      <script src="js/bootstrap.min.js"></script>
      <script src="js/jquery.prettyPhoto.js"></script>
      <script src="js/main.js"></script>
  </body>
  </html>
