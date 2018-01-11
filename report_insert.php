<?php
$error ='';
if(isset($_POST['submit'])){
  include 'connect.php';

  $adhid = $_POST['adhid'];
  $email = $_POST['email'];
  $contact = $_POST['contact'];
  $name_of_child = $_POST['name_of_child'];
  $place_found = $_POST['place_found'];
  $date_when_found = $_POST['date_when_found'];
  $police = $_POST['police'];
  $cmt = $_POST['comment'];
  $imageName = mysql_real_escape_string($_FILES["image"]["name"]);
  $imageData = mysql_real_escape_string(file_get_contents($_FILES["image"]["tmp_name"]));
  $imageType = mysql_real_escape_string($_FILES["image"]["type"]);

  if(substr($imageType,0,5) == "image"){
    $insert = "INSERT into report values('$adhid', '$email', '$contact', '$name_of_child', '$place_found', '$date_when_found', '$police', '$cmt', '$imageData')";
    if(!mysql_query($insert)){
      $error = "Error" .mysql_error();
    }else{
      $error = "Your report has been submitted";
    }
  }
}
 ?>
