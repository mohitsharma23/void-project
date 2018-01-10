<?php

  include 'connect.php';


  date_default_timezone_set('Asia/Kolkata');
  $date = date('Y-m-d h:i:s a', time());

if(isset($_SESSION['login_staff'])){
  $sid = $_SESSION['login_staff'];
  $login_time = $date;



  if(!isset($_SESSION['login_time'])){
    $_SESSION['login_time'] = $date;
    $ins = mysql_query("INSERT INTO staff_logs VALUES('$sid', '$login_time', 0, 's')");
    if(!$ins){
      echo "Error" .mysql_error();
    }else{
      echo "Done";
    }
  }

}elseif (isset($_SESSION['login_admin'])) {
  $aid = $_SESSION['login_admin'];
  $login_time = $date;

  if(!isset($_SESSION['login_time'])){
    $_SESSION['login_time'] = $date;
    $ins = mysql_query("INSERT INTO staff_logs VALUES('$aid', '$login_time', 0, 'a')");
    if(!$ins){
      echo "Error" .mysql_error();
    }else{
      echo "Done";
    }
  }

}

 ?>
