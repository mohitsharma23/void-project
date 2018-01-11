<?php
  include 'asession.php';
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

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>
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
if(isset($_POST['edit'])){
  $error = "";
  include "connect.php";

  $sid = $_POST['sid'];
  $ngoid = $_POST['ngoid'];
  $name = $_POST['name'];
  $addr = $_POST['address'];
  $adhid = $_POST['adhid'];
  $contact = $_POST['contact'];
  $email = $_POST['email'];
  $status = $_POST['status'];


  $update = "UPDATE staff SET address='$addr', contact='$contact', email='$email', status='$status' where sid='$sid'";
  $q = mysql_query($update);
  if(!$q){
    $error = "Error";
  }
  $error = "Data edited success";
  }
?>
    <section id="title" class="emerald">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <h1>Update Staff Info</h1>
                </div>
            </div>
        </div>
    </section><!--/#title-->
    <?php
        if(isset($_POST['submit'])){
          include "connect.php";
          $ngoid = $row['ngoid'];
          $sid = $_POST['sid'];
          $query = mysql_query("SELECT * from staff where sid='$sid' AND status='a' AND ngoid='$ngoid'");
          $row = mysql_fetch_assoc($query);
          if($row){

            ?>


            <section id="parent_form" class="container">
              <form class="form-horizontal" action="" method="POST">
                <div class="form-group">
                      <label class="control-label col-sm-3" for="sid">Staff ID:</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" value="<?php echo $row['sid']; ?>" name="sid" readonly>
                      </div>
                    </div>
                    <div class="form-group">
                          <label class="control-label col-sm-3" for="ngoid">NGO ID:</label>
                          <div class="col-sm-8">
                            <input type="text" class="form-control" value="<?php echo $row['ngoid']; ?>" name="ngoid" readonly>
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="control-label col-sm-3" for="name">Name:</label>
                          <div class="col-sm-8">
                            <input type="text" class="form-control" value="<?php echo $row['name']; ?>" name="name" readonly>
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="control-label col-sm-3" for="address">Address:</label>
                          <div class="col-sm-8">
                            <input type="text" class="form-control" value="<?php echo $row['address']; ?>" name="address">
                          </div>
                        </div>
                    <div class="form-group">
                      <label class="control-label col-sm-3" for="adhid">Adhaar ID:</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" value="<?php echo $row['adhid']; ?>" name="adhid" readonly>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-sm-3" for="contact">Contact No:</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" value="<?php echo $row['contact']; ?>" name="contact">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-sm-3" for="email">Email Id:</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" value="<?php echo $row['email']; ?>" name="email">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-sm-3" for="status">Status(a->active | ia->inactive):</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" value="<?php echo $row['status']; ?>" name="status">
                      </div>
                    </div>
                    <br>
                    <div class="form-group">
                      <div class="text-center">
                        <button type="submit" name="edit" class="btn btn-default">Edit</button><br>
                      </div>
                    </div>
              </form>
            </section>

    <?php
          }else{
          ?>

          <center><h3>Staff not Present</h3></center>

          <section id="parent_form" class="container">
            <form class="form-horizontal" action="updatest.php" method="POST">
              <div class="form-group">
                    <label class="control-label col-sm-3" for="sid">Staff ID:</label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control" placeholder="Enter Staff Id" name="sid" required>
                    </div>
                  </div>
                  <div class="form-group" id="sub_btn">
                    <div class="text-center">
                      <button type="submit" name="submit" class="btn btn-default" id="hidden">Submit</button><br>
                    </div>
                  </div>
                </form>
          </section>
          <?php
          }

        }elseif (!isset($_POST['submit'])) {
          ?>
          <section id="parent_form" class="container">
            <form class="form-horizontal" action="updatest.php" method="POST">
              <div class="form-group">
                    <label class="control-label col-sm-3" for="sid">Staff ID:</label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control" placeholder="Enter Staff Id" name="sid" required>
                    </div>
                  </div>
                  <div class="form-group" id="sub_btn">
                    <div class="text-center">
                      <button type="submit" name="submit" class="btn btn-default" id="hidden">Submit</button><br>
                    </div>
                  </div>
                </form>
          </section>
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


 </body>
 </html>
