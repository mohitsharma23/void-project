<?php
include "connect.php";
function GetMAC(){
    ob_start();
    system('getmac');
    $Content = ob_get_contents();
    ob_clean();
    return substr($Content, strpos($Content,'\\')-20, 17);
}
$mac= GetMAC();
session_start();
//$id=$_SESSION[""];
$con=9;
$date=date('y-m-d');
$se=mysql_query("select * from logs where mac='$mac' and date='$date'");
if($in=mysql_fetch_array($se)){
if($in["count"]>=3){
	echo "Searched for Max time";
  $con = 53;
	}
	if($in["count"]<3){
		$in["count"]++;
		$c=$in["count"];
		$up=mysql_query("update logs set count='$c' where mac='$mac' and date='$date'");
		echo "yo";
		$con=0;
		}
}else{
	$x=mysql_query("insert into logs values('$mac','$date','0')");
	}
?>
