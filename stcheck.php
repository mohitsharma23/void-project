<?php
$error='';
  if(isset($_POST['submit'])){
if($_POST){
session_start();
  if($_POST['capcha']!=$_SESSION['capchaid']){
    echo $_SESSION['capchaid'];
    header('location: registration.php?check=1');
    die();
    session_destroy();
  }else{



      if(empty($_POST['sid']) || empty($_POST['pass'])){
        $error = "Enter Username/Password";
      }else{
        include "connect.php";

        $sid = $_POST['sid'];
        $password = $_POST['pass'];

        $query = mysql_query("SELECT * from staff_login where sid='$sid' AND password='$password'");
        $row = mysql_num_rows($query);
        if($row == 1){
          $_SESSION['login_staff'] = $sid;
          // header('Location: stlogin.php');
        }else{
          $error = "Username/password is invalid";
        }
      }
    }
  }
}




 ?>
