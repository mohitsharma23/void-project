<?php
$error = '';
if($_POST){
session_start();
  if($_POST['capcha']!=$_SESSION['capchaid']){
    die("Capcha was incorrect");
    session_destroy();
  }else{
    if(isset($_POST['submit'])){
      include 'connect.php';

      $id = $_POST['id'];
      $password = $_POST['pass'];

      $query = mysql_query("SELECT * from master_admin where jid='$id' AND password='$password'");
      $res = mysql_num_rows($query);
      if($res){
        $_SESSION['login_master'] = $id;
      }else{
        $error = "Either Id/Password is incorrect";
      }
    }
  }
}
?>
