<?php
session_start();
if(isset($_SESSION['login_staff'])){
  include('session.php');
}else if(isset($_SESSION['login_admin'])){
  include('asession.php');
}


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

<?php
$id = $row['ngoid'];
$query = mysql_query("SELECT * from ngo where ngoid='$id'");
$data = mysql_fetch_array($query);

$cs = mysql_query("SELECT count(*) as total_st from staff where ngoid='$id' AND status='a'");
$counts = mysql_fetch_assoc($cs);

$cc = mysql_query("SELECT count(*) as total_c from child where ngoid='$id' AND status='a'");
$countc = mysql_fetch_assoc($cc);

 ?>

<div class="container">
  <center><h2>NGO ID - <?php echo $data['ngoid']; ?></h2></center>
  <hr width="70%">
  <div class="row">
    <div class="col-sm-1"></div>
    <div class="col-sm-6">
      <p><strong>Name - </strong><?php echo $data['name']; ?></p>
      <p><strong>Address - </strong><?php echo $data['address']; ?></p>
      <p><strong>City - </strong><?php echo $data['city']; ?></p>
    </div>
    <div class="col-sm-4">
      <p><strong>Child capactiy </strong><br>
        <?php echo $countc['total_c']; ?> / <?php echo $data['capacity']; ?></p>
      <p><strong>Staff Count </strong><br>
        <?php echo $counts['total_st']; ?> / <?php echo $data['staff_count']; ?></p>
    </div>
    <div class="col-sm-1"></div>
  </div>
</div>

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
