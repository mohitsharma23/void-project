<?php
$msg = '';


if(isset($_POST['submit'])){
	include "cond.php";
	if($con==4){
			if(strpos($_POST["email"],'@')){
			if(strpos($_POST["email"],'.com') || strpos($_POST["email"],'.in')){

  $to = $_POST['email']; //"psycjoker@gmail.com";
  $subject = "Query";

  $message = "<h1>Query Recorded</h1>";
  $message .= "<p>This is to inform you that your query for your child have been recorded and we will try our best to locate your child.</p>";

  $header = "From: www.google.com \r\n";
  $header .= "Content-type: text/html \r\n";

  $test = mail($to, $subject, $message, $header);

  if($test){
    $msg = 'Mail sent';
  }else{
    $msg = "error";
  }
}
}
}
}else{}
 ?>
