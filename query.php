<?php

  include 'sendmail.php';
  include 'parent_insert.php';
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Query | Flat Theme</title>
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
                    <h1>Register a Query!</h1>
                </div>
            </div>
        </div>
    </section><!--/#title-->

    <section id="parent_form" class="container">
      <form class="form-horizontal" action="" method="POST" enctype="multipart/form-data">
        <div class="form-group">
              <label class="control-label col-sm-3" for="adhid">Adhaar ID:</label>
              <div class="col-sm-6">
                <input type="text" class="form-control" placeholder="Enter Adhaar Id" name="adhid" maxlength="12">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-3" for="name">Name:</label>
              <div class="col-sm-6">
                <input type="text" class="form-control" placeholder="Enter Name" name="name">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-3" for="contact">Contact:</label>
              <div class="col-sm-6">
                <input type="text" class="form-control" placeholder="Enter your Phone NO." name="contact"  maxlength="10" required>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-3" for="email">E-Mail:</label>
              <div class="col-sm-6">
                <input type="email" class="form-control" placeholder="Enter Email" name="email" required>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-3" for="address">Address:</label>
              <div class="col-sm-6">
                <input type="text" class="form-control" placeholder="Enter your Address" name="address" required>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-3" for="firno">FIR Number:</label>
              <div class="col-sm-6">
                <input type="text" class="form-control" placeholder="Enter FIR Number" name="firno" required>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-3" for="location">Last Seen Location:</label>
              <div class="col-sm-6">
                <input type="text" class="form-control" placeholder="Enter Last seen Location" name="last_seen_location" required>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-3" for="time">Last Seen Time:</label>
              <div class="col-sm-6">
                <input type="datetime-local" class="form-control" placeholder="Enter Last seen Time" name="last_seen_time" required>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-3" for="kadhid">Kid Adhaar ID(if any):</label>
              <div class="col-sm-6">
                <input type="text" class="form-control" placeholder="If Adhaar ID is not present, Type 0" name="kadhid" required>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-3" for="kadhid">Kid's Picture:</label>
              <div class="col-sm-6">
                <input type="file" class="form-control" name="image" required>
              </div>
            </div>
            <br>
            <div class="form-group">
              <div class="text-center">
                <button type="submit" name="submit" class="btn btn-default">Submit</button><br>
                <?php if(empty($error)){
                }else{
                  ?>
                    <script>alert("<?php echo $error; ?>");</script>
                  <?php
                } ?>

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
