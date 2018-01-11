<script>
  function myForm(form){
    if(!form.capcha.value.match(/^\d{4}$/)){
      alert("Please enter the Correct Capcha");
      form.capcha.focus();
      return false;
    }
    return true;
  }
</script>
<?php
if(isset($_REQUEST['check'])){
echo "<script>alert('Wrong captcha');</script>";
}
 ?>
<?php
session_start();
include 'stcheck.php';
include 'adcheck.php';
if(isset($_SESSION['login_admin'])){
  header('location: adlogin.php');

}elseif(isset($_SESSION['login_staff'])){
  header('location: stlogin.php');
  include 'st_logs.php';
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
  <!-- <script src="https://www.google.com/recaptcha/api.js" async defer></script> -->


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
					<li class="active"><a href="registration.php">Administration</a></li>
					<li><a href="maindex.php">Authority</a></li>
                </ul>
            </div>
        </div>
    </header><!--/header-->

    <section id="title" class="emerald">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <h1>Registration</h1>
                </div>
            </div>
        </div>
    </section><!--/#title-->

<div class="row" style="min-height:264px;">
  <div class="col-sm-1"></div>
  <div class="col-sm-4">
    <section id="registration" class="container">
        <div class="center" role="form">
          <h2>Staff Login</h2>
          <form action="" method="POST" onsubmit="return myForm(this);">
            <fieldset class="registration-form">
                <div class="form-group">
                    <input type="text" id="sid" name="sid" placeholder="ID" class="form-control">
                </div>
                <div class="form-group">
                    <input type="password" id="pass" name="pass" placeholder="Password" class="form-control">
                </div>
                <img src="capcha.php"><br>
                <input type="text" size="6" maxlength="5" name="capcha" value="">


                <br><br>
                <div class="form-group">
                    <button id="sub" class="btn btn-success btn-md btn-block" name="submit">Log In</button>

                </div>
            </fieldset>
          </form>
        </div>
    </section><!--/#registration-->
  </div>
  <div class="col-sm-2"><br><br><br><br><br>
    <center><h4><?php echo $error; ?></h4></center>
  </div>
  <div class="col-sm-4">
    <section id="registration" class="container">
        <div class="center" role="form">
          <h2>Admin Login</h2>
          <form action="" method="POST">
            <fieldset class="registration-form">
                <div class="form-group">
                    <input type="text" id="uid" name="uid" placeholder="ID" class="form-control">
                </div>
                <div class="form-group">
                    <input type="password" id="pass" name="pass" placeholder="Password" class="form-control">
                </div>
                <img src="capcha2.php"><br>
                <input type="text" size="6" maxlength="5" name="capcha2" value="">
                <br><br>
                <div class="form-group">
                    <button id="sub" class="btn btn-success btn-md btn-block" name="submit1">Log In</button>

                </div>
            </fieldset>
          </form>
        </div>
    </section><!--/#registration-->
  </div>
  <div class="col-sm-1"></div>
</div>



<script>


// $(document).ready(function(e) {
//  $("#sub").click(function(){
// 	 var uid=$("#uid").val();
// 	 var pass=$("#pass").val();
// 	 if(uid==""){
// 		 alert("Enter USER ID");
// 		 return false;
// 		 }
// 		 if(pass==""){
// 			 alert("Enter Password");
// 			 return false;
// 			 }
// 	 var my="uid="+uid+"&pass="+pass;
// 	 $.ajax({
// 		 data:my,
// 		 type:'post',
// 		 url:"login_check_members.php",
// 		 success: function(m){
// 			 if(m==""){
// 				 window.location.href="loggedin_members.php";
// 				 }
// 				 else{
// 					 alert(m);
// 					 }
// 			 }
// 		 });
// 	 });
// });
</script>
<br>







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
