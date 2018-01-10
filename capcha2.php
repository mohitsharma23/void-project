<?php
session_start();
$captchanumber = rand(1000,9999);
$_SESSION['capchaid2'] = $captchanumber;

//$_SESSION["code"] = $captchanumber;
$image = imagecreate($width=150,$height=40);
$textcolor = imagecolorallocate($image, 0x33, 0x33, 0x33);
$background = imagecolorallocate($image, 0xFF, 0xFF, 0xFF);
imagefill($image, 0, 0, $background);
imagestring($image, rand(3, 5), 40, 2, $captchanumber, $textcolor);
header('Content-type: image/png');
imagepng($image);
imagedestroy($image);



?>
