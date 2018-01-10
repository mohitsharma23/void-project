<?php
session_start();
include 'connect.php';
date_default_timezone_set('Asia/Kolkata');
$date = date('Y-m-d h:i:s a', time());

$login_time = $_SESSION['login_time'];
$logout_time = $date;

  if(isset($_SESSION['login_admin'])){
    $up = mysql_query("UPDATE staff_logs set logout_time='$logout_time' where sid='$id' AND login_time='$login_time'");
  if(session_destroy()){
        header('location: registration.php');
  }
  }elseif (isset($_SESSION['login_master'])) {
    header('location: maindex.php');
    session_destroy();
  }elseif (isset($_SESSION['login_staff'])) {
      $id = $_SESSION['login_staff'];
      $up = mysql_query("UPDATE staff_logs set logout_time='$logout_time' where sid='$id' AND login_time='$login_time'");
    if(session_destroy()){
          header('location: registration.php');
    }
  }

 ?>
