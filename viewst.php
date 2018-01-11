<?php

session_start();
if(isset($_SESSION['login_admin'])){
    include 'asession.php';
}elseif (isset($_SESSION['login_staff'])) {
    include 'session.php';
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



	 <section id="title" class="emerald">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <h1>View</h1>
                </div>
            </div>
        </div>
    </section><!--/#title-->

<?php
$id = $row['ngoid'];
$retrieve = mysql_query("SELECT * from staff where ngoid='$id'");
while($fetch=mysql_fetch_assoc($retrieve)){
  $id = $fetch['sid'];
  ?>
<br><br>
<div class="container">
<div class="row">
  <div class="col-sm-1"></div>
  <div class="col-sm-3">
    <p><strong>Name : </strong><?php echo $fetch['name']; ?></p>
    <p><strong>Staff ID : </strong><?php echo $fetch['sid']; ?></p>
  </div>
  <div class="col-sm-3">
    <p><strong>Phone NO : </strong><?php echo $fetch['contact']; ?></p>
    <p><strong>Email ID : </strong><?php echo $fetch['email']; ?></p>
  </div>
  <div class="col-sm-3">
    <p><strong>Adhaar ID : </strong><?php echo $fetch['adhid']; ?></p>
    <p><strong>Address : </strong><?php echo $fetch['address']; ?></p>
  </div>
    <div class="col-sm-2"></div>
  </div>
  <br>
</div>
</div>


  <?php
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
