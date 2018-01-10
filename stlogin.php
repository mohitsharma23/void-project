<?php
  include('session.php');
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
include 'st_logs.php';
   ?>
    <!-- <header class="navbar navbar-inverse navbar-fixed-top wet-asphalt" role="banner">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            <a class="navbar-brand" href="stlogin.php"><img src="images/hope.png" style="height:80px;widtd:150px" alt="logo"></a>
            </div>
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="addch.php">Add</a></li>
                    <li><a href="updatech.php">Update</a></li>
					          <li><a href="ngoinfo.php">NGO Info</a></li>
					          <li><a href="logout.php">Logout</a></li>

                </ul>
            </div>
        </div>
    </header><!--/header--> -->



	 <section id="title" class="emerald">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <h1>Welcome user!!<?php echo $_SESSION['login_time']; ?></h1>
                </div>
            </div>
        </div>
    </section><!--/#title-->



    <br><br>
    	<div class="container">
        <div class="row">
          <div class="col-sm-1"></div>
          <div class="col-sm-4">
            <img src="images/admin.png" class="img-responsive img-rounded" alt="admin" height="200px" width="200px">
          </div>
          <div class="col-sm-6">
            <table class="table table-striped">
              <tbody>
                <tr>
                  <td>Name</td>
                  <td><?php echo $row['name']; ?></td>
                </tr>
                <tr>
                  <td>Staff ID</td>
                  <td><?php echo $row['sid']; ?></td>
                </tr>
                <tr>
                  <td>NGO ID</td>
                  <td><?php echo $row['ngoid']; ?></td>
                </tr>
                <tr>
                  <td>Adhaar number</td>
                  <td><?php echo $row['adhid']; ?></td>
                </tr>
                <tr>
                  <td>Address</td>
                  <td><?php echo $row['address']; ?></td>
                </tr>
                <tr>
                  <td>Contact no</td>
                  <td><?php echo $row['contact']; ?></td>
                </tr>
                <tr>
                  <td>Email Id</td>
                  <td><?php echo $row['email']; ?></td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="col-sm-1"></div>
        </div>
      </div>





	 <footer id="footer" class="midnight-blue">
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
