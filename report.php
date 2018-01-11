<?php
  include 'report_insert.php';
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Report | Flat Theme</title>
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
</head><!--/head-->
<body>
    <header class="navbar navbar-inverse navbar-fixed-top wet-asphalt" role="banner">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php"><img src="images/hope.png" style="height:80px;width:150px" alt="logo"></a>
            </div>
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="about-us.php">About Us</a></li>
					<li class="active" ><a href="query.php">Register a Query</a></li>
					<li><a href="registration.php">Administration</a></li>
					<li><a href="maindex.php">Authority</a></li>
                </ul>
            </div>
        </div>
    </header><!--/header-->

    <section id="title" class="emerald">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <h1>Enter a Report!</h1>
                </div>
            </div>
        </div>
    </section><!--/#title-->

    <section id="parent_form" class="container">
      <form class="form-horizontal" action="" method="POST" enctype="multipart/form-data">
        <div class="form-group">
              <label class="control-label col-sm-3" for="adhid">Adhaar ID of Reporter:</label>
              <div class="col-sm-6">
                <input type="text" class="form-control" placeholder="Enter Adhaar Id" name="adhid"  maxlength="12" required>
              </div>
            </div>
            <div class="form-group">
                  <label class="control-label col-sm-3" for="adhid">Email ID:</label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control" placeholder="Enter Email Id" name="email" required>
                  </div>
                </div>
                <div class="form-group">
                      <label class="control-label col-sm-3" for="adhid">Contact:</label>
                      <div class="col-sm-6">
                        <input type="text" class="form-control" placeholder="Enter Contact NO" name="contact"  maxlength="10" required>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-sm-3" for="place_found">Enter name of child:</label>
                      <div class="col-sm-6">
                        <input type="text" class="form-control" placeholder="Enter Name of child" name="name_of_child">
                      </div>
                    </div>
            <div class="form-group">
              <label class="control-label col-sm-3" for="place_found">Place Found:</label>
              <div class="col-sm-6">
                <input type="text" class="form-control" placeholder="Enter Place found" name="place_found" required>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-3" for="date_when_found">Date when Found:</label>
              <div class="col-sm-6">
                <input type="date" class="form-control" placeholder="Enter Date when found" name="date_when_found" required>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-3" for="date_when_found">Nearest Police Station:</label>
              <div class="col-sm-6">
                <input type="text" class="form-control" placeholder="Enter nearest Police Station" name="police" required>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-3" for="cmt">Any Message:</label>
              <div class="col-sm-6">
                <textarea rows="4" cols="50" name="comment"></textarea>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-3" for="image">Kid's Picture:</label>
              <div class="col-sm-6">
                <input type="file" class="form-control" name="image" required>
              </div>
            </div>
            <br>
            <div class="form-group">
              <div class="text-center">
                <button type="submit" name="submit" class="btn btn-default">Submit</button><br>
                <span><?php echo $error; ?></span>
              </div>
            </div>
      </form>
    </section>


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
