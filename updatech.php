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

     $kid = $_POST['kid'];
     $ngoid = $_POST['ngoid'];
     $adhid = $_POST['adhid'];
     $name = $_POST['name'];
     $dob = $_POST['dob'];
     $place_found = $_POST['place_found'];
     $by_whom = $_POST['by_whom'];
     $date_when_found = $_POST['date_when_found'];
     $reason = $_POST['reason'];
     $adhid_whom = $_POST['adhid_whom'];

     $imageData = mysql_real_escape_string(file_get_contents($_FILES["image"]["tmp_name"]));

     $status = $_POST['status'];
     // $insert = "INSERT into child values('$kid', '$ngoid', '$adhid', '$name', '$dob', '$place_found', '$by_whom', '$date_when_found' '$reason', '$adhid_whom')";
     $update = "UPDATE child SET adhid='$adhid', name='$name', image='$imageData', status='$status' where kid='$kid'";
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
                    <h1>Update Child Info</h1>
                </div>
            </div>
        </div>
    </section><!--/#title-->



<?php
    if(isset($_POST['submit'])){
      include "connect.php";
      $ngoid = $row['ngoid'];
      $kid = $_POST['kid'];
      $query = mysql_query("SELECT * from child where kid='$kid' AND status='a' AND ngoid='$ngoid'");
      $row = mysql_fetch_assoc($query);
      if($row){
        ?>

        <section id="parent_form" class="container">

         <form class="form-horizontal" action="" method="POST" enctype="multipart/form-data">
           <div class="form-group">

                 <label class="control-label col-sm-3" for="kid">Kid ID:</label>
                 <div class="col-sm-8">
                   <input type="text" class="form-control" value="<?php echo $row['kid']; ?>" name="kid" readonly>
                 </div>

           </div>
           <div class="form-group">

                 <label class="control-label col-sm-3" for="ngoid">NGO ID:</label>
                 <div class="col-sm-8">
                   <input type="text" class="form-control" value="<?php echo $row['ngoid']; ?>" name="ngoid" readonly>
                 </div>

           </div>
           <div class="form-group">

                 <label class="control-label col-sm-3" for="adhid">Adhaar ID:</label>
                 <div class="col-sm-8">
                   <input type="text" class="form-control" value="<?php echo $row['adhid']; ?>" name="adhid">
                 </div>

           </div>


               <div class="form-group">
                 <label class="control-label col-sm-3" for="name">Name:</label>
                 <div class="col-sm-8">
                   <input type="text" class="form-control" value="<?php echo $row['name']; ?>" name="name">
                 </div>
               </div>

               <div class="form-group">
                 <label class="control-label col-sm-3" for="dob">DOB:</label>
                 <div class="col-sm-8">
                   <input type="number" class="form-control" value="<?php echo $row['dob']; ?>" name="dob" readonly>
                 </div>
               </div>

               <div class="form-group">
                 <label class="control-label col-sm-3" for="place_found">Place Found:</label>
                 <div class="col-sm-8">
                   <input type="text" class="form-control" value="<?php echo $row['place_found']; ?>" name="place_found">
                 </div>
               </div>

               <div class="form-group">
                 <label class="control-label col-sm-3" for="by_whom">Found by Whom:</label>
                 <div class="col-sm-8">
                   <input type="text" class="form-control" value="<?php echo $row['by_whom']; ?>" name="by_whom">
                 </div>
               </div>

               <div class="form-group">
                 <label class="control-label col-sm-3" for="date_when_found">Date when Found:</label>
                 <div class="col-sm-8">
                   <input type="date" class="form-control" value="<?php echo $row['date_when_found']; ?>" name="date_when_found">
                 </div>
               </div>

               <div class="form-group">
                 <label class="control-label col-sm-3" for="reason">Reason:</label>
                 <div class="col-sm-8">
                   <input type="text" class="form-control" value="<?php echo $row['reason']; ?>" name="reason" readonly>
                 </div>
               </div>

               <div class="form-group">
                 <label class="control-label col-sm-3" for="adhid_whom">AdhaarID of Founder:</label>
                 <div class="col-sm-8">
                   <input type="text" class="form-control" value="<?php echo $row['adhid_whom']; ?>" name="adhid_whom">
                 </div>
               </div>

               <div class="form-group">
                 <label class="control-label col-sm-3" for="kadhid">Kid's Picture:</label>
                 <div class="col-sm-8">
                   <input type="file" class="form-control" name="image">
                   <img src="showimage.php?kid=<?php echo $kid; ?>" height="100px" width="100px">
                 </div>
               </div>
               <div class="form-group">
                 <label class="control-label col-sm-3" for="status">Status(a->active | ia->inactive):</label>
                 <div class="col-sm-8">
                   <input type="text" class="form-control" value="<?php echo $row['status']; ?>" name="status">
                 </div>
               </div>

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

      <center><h3>Kid not Present</h3></center>

      <section id="parent_form" class="container">
        <form class="form-horizontal" action="updatech.php" method="POST" onsubmit="myFunc()">
          <div class="form-group">
                <label class="control-label col-sm-3" for="kid">Kid ID:</label>
                <div class="col-sm-6">
                  <input type="text" class="form-control" placeholder="Enter Kid Id" name="kid" required>
                </div>
              </div>
              <div class="form-group">
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
        <form class="form-horizontal" action="updatech.php" method="POST" onsubmit="myFunc()">
          <div class="form-group">
                <label class="control-label col-sm-3" for="kid">Kid ID:</label>
                <div class="col-sm-6">
                  <input type="text" class="form-control" placeholder="Enter Kid Id" name="kid" required>
                </div>
              </div>
              <div class="form-group">
                <div class="text-center">
                  <button type="submit" name="submit" class="btn btn-default" id="hidden">Submit</button><br>
                </div>
              </div>
          </form>
      </section>
      <?php
    }
?>


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



 </body>
 </html>
