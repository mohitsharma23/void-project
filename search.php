<?php
include 'logs.php';
if($con == 53){
  die();
}
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Search | Hope</title>
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
                  <li><a href="query.php">Register a Query</a></li>
                  <li><a href="registration.php">Administration</a></li>
                  <li><a href="maindex.php">Authority</a></li>
              </ul>
          </div>
      </div>
  </header><!--/header-->
<?php
date_default_timezone_set('Asia/Kolkata');
$date = date('Y-m-d');

 ?>
<br><br><br>
<center><h2>For refined search, use atleast one of the filters</h2></center>
<section class="search_main container">
<form action="search.php" method="POST">
  <div class="row center">
    <!-- <div class="col-sm-1"></div> -->
    <div class="col-sm-4">
      <div class="form-group">
        <label for="age">Enter Date of Birth:</label>
          <input type="date" class="form-control" id="age" name="by_dob" max="<?php echo $date; ?>">
      </div>
    </div>
    <div class="col-sm-4">
      <div class="form-group">
        <label for="age">Enter Adhaar ID:</label>
          <input type="text" class="form-control" id="age" name="by_adhid" maxlength="12">
      </div>
    </div>
    <div class="col-sm-4">
      <div class="form-group">
        <label for="place">Enter Place:</label>
        <input type="text" class="form-control" id="place" name="by_place">
      </div>
    </div>
    <!-- <div class="col-sm-1"></div> -->
    </div>
<center><input type="submit" name="submit" value="Search" class="btn btn-default"></center>
  </form>
</section>

<?php
if(isset($_POST['submit'])){
  if(empty($_POST['by_dob']) && empty($_POST['by_place']) && empty($_POST['by_adhid'])){
    ?>
      <center><h4>Enter anyone or all the fields to search.</h4></center>
    <?php
  }else{
    include 'connect.php';
    $by_dob = $_POST['by_dob'];
    $by_adhid = $_POST['by_adhid'];
    $by_place = $_POST['by_place'];

    $query = "SELECT * from child WHERE dob = '$by_dob' OR adhid = '$by_adhid' OR place_found = '$by_place' AND reason='lost'";

    $sql = $query;
    $res = mysql_query($sql);
    $row = mysql_num_rows($res);
    if($row){
    while($data = mysql_fetch_assoc($res)){
    $ngoid = $data['ngoid'];
    $ngoinfo = mysql_query("SELECT * from ngo where ngoid='$ngoid'");
    $nrow = mysql_fetch_assoc($ngoinfo);

    $id = $data['kid'];
    ?>
    <div class="row container">
    <div class="col-sm-1"></div>
    <div class="col-sm-3">
      <img src="showimage.php?kid=<?php echo $id; ?>" height="100px" width="100px">
    </div>
    <div class="col-sm-3">
      <p><strong>Name : </strong><?php echo $data['name']; ?></p>

    </div>
    <div class="col-sm-3">
      <p><strong>Place Found : </strong><?php echo $data['place_found']; ?></p>
      <p><strong>Date when Found : </strong><?php echo $data['date_when_found']; ?></p>
    </div>
    <div class="col-sm-2">
      <p><strong>NGO Name : </strong><?php echo $nrow['name']; ?></p>
      <p><strong>NGO City : </strong><?php echo $nrow['city']; ?></p>
    </div>
    </div>
    <hr width="80%">
    <?php
  }
}else{
  ?>
    <center><h4>This search does not match any result. Try another search.</h4></center>
  <?php
}
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
