<?php
include 'madmin_check.php';
if(isset($_SESSION['login_master'])){
  header('location: maprofile.php');
}

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Registration | Flat Theme</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <style>
    body{
      overflow-x: hidden;
    }
    </style>

    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">

	<script src="js/jquery-1.11.1.min.js" type="application/javascript"></script>



</head><!--/head-->
<body>

  <header class="navbar navbar-inverse navbar-fixed-top wet-asphalt" role="banner">
      <div class="container">
        <header class="navbar navbar-inverse navbar-fixed-top wet-asphalt" role="banner">
            <div class="container">
                <div class="navbar-header">

                    <a class="navbar-brand" href="index.php"><img src="images/hope.png" style="height:80px;width:150px" alt="logo"></a>
                </div>
            </div>
        </header><!--/header-->
      </div>
  </header><!--/header-->


    <section id="title" class="emerald">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <h1>Master Admin Login</h1>
                </div>
            </div>
        </div>
    </section><!--/#title-->

<br><br>
      <div class="container" style="min-height:360px;">
        <div class="row">
          <div class="col-sm-4"></div>
          <div class="col-sm-4">
            <form action="" method="POST">
                  <div class="form-group">
                      <input type="text" id="id" name="id" placeholder="ID" class="form-control">
                  </div>
                  <div class="form-group">
                      <input type="password" id="pass" name="pass" placeholder="Password" class="form-control">
                  </div>
                  <center><img src="capcha.php"><br>
                  <input type="text" size="6" maxlength="5" name="capcha" value=""></center>
                  <br><br>
                  <div class="form-group">
                      <button id="sub" class="btn btn-success btn-md btn-block" name="submit">Log In</button><br>
                      <span><?php echo $error; ?></span>
                  </div>
            </form>
          </div>
          <div class="col-sm-4"></div>
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
