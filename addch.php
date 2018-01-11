<?php
session_start();
if(isset($_SESSION['login_admin'])){
    include 'asession.php';
}elseif (isset($_SESSION['login_staff'])) {
    include 'session.php';
}
  include('child_insert.php');
 ?>

<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Home | Flat Theme</title>
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
$id = $row['ngoid'];
     ?>


    <section id="title" class="emerald">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <h1>Add Child</h1>
                </div>
            </div>
        </div>
    </section><!--/#title-->

    <section id="parent_form" class="container">
      <form class="form-horizontal" action="" method="POST" enctype="multipart/form-data">
        <div class="form-group">
              <label class="control-label col-sm-3" for="kid">Kid ID:</label>
              <div class="col-sm-6">
                <input type="text" class="form-control" placeholder="Enter Kid Id" name="kid" required>
              </div>
            </div>
            <div class="form-group">
                  <label class="control-label col-sm-3" for="ngoid">NGO ID:</label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control" value="<?php echo $id; ?>" name="ngoid" readonly>
                  </div>
            </div>
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
              <label class="control-label col-sm-3" for="dob">DOB:</label>
              <div class="col-sm-6">
                <input type="date" class="form-control" placeholder="Enter Date of Birth" name="dob">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-3" for="place_found">Place Found:</label>
              <div class="col-sm-6">
                <input type="text" class="form-control" placeholder="Place Found" name="place_found" required>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-3" for="by_whom">Found by Whom:</label>
              <div class="col-sm-6">
                <input type="text" class="form-control" placeholder="Found by Whom" name="by_whom" required>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-3" for="date_when_found">Date when Found:</label>
              <div class="col-sm-6">
                <input type="date" class="form-control" placeholder="Date when Found" name="date_when_found" required>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-3" for="reason">Reason:</label>
              <div class="col-sm-6">
                <input type="text" class="form-control" placeholder="Enter the reason" name="reason" required>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-3" for="adhid_whom">AdhaarID of Founder:</label>
              <div class="col-sm-6">
                <input type="text" class="form-control" placeholder="Enter AdhaarID of Founder" name="adhid_whom" required>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-3" for="kadhid">Kid's Picture:</label>
              <div class="col-sm-6">
                <input type="file" class="form-control" name="image" required>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-3" for="status"></label>
              <div class="col-sm-6">
                <input type="hidden" class="form-control" value="a" name="status">
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
