<?php
$error = '';


if(isset($_POST['submit'])){
  include "cond.php";
  if($con==4){
if(strpos($_POST["email"],'@')){

if(isset($_POST['submit'])){
include "connect.php";

$adhid = $_POST['adhid'];
$name = $_POST['name'];
$contact = $_POST['contact'];
$email = $_POST['email'];
$addr = $_POST['address'];
// $fir = $_POST['fir'];

$firno = $_POST['firno'];
$location = $_POST['last_seen_location'];
$time = $_POST['last_seen_time'];
$kadhid = $_POST['kadhid'];
// $image = $_POST['image'];

// $total = count($_FILES["image"]["tmp_name"]);
// for($i=0;$i<$total;$i++){
//
// }

$imageData = mysql_real_escape_string(file_get_contents($_FILES["image"]["tmp_name"]));

if(substr($imageType,0,5) == "image" ){
  $insert = "INSERT INTO parent values('$adhid', '$name', '$contact', '$email', '$addr', '$firno', '$location', '$time', '$kadhid', '$imageData')";
  if(!mysql_query($insert)){
    echo "Error" .mysql_error();
  }else{
      $error = "Your query has been submitted";
  }
}else{
  $error = "Only images are allowed";
}

}
}
$error="Wrong Mail ID";
}
}
?>
