<?php
session_start();
$captchanumber = rand(1000,9999);
$_SESSION['capchaid'] = $captchanumber;

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
<?PHP
//   $image = imagecreatetruecolor(120, 30) or die("Cannot Initialize new GD image stream");
//
//   $background = imagecolorallocate($image, 0xFF, 0xFF, 0xFF);
//   imagefill($image, 0, 0, $background);
//   $linecolor = imagecolorallocate($image, 0xCC, 0xCC, 0xCC);
//   $textcolor = imagecolorallocate($image, 0x33, 0x33, 0x33);
//
//   for($i=0; $i < 6; $i++) {
//     imagesetthickness($image, rand(1,4));
//     imageline($image, 0, rand(0,30), 120, rand(0,30), $linecolor);
//   }
// session_start();
//   $digit = '';
//   for($x = 15; $x <= 95; $x += 20) {
//     $digit.=($num = rand(0, 9));
//     imagechar($image, rand(3, 5), $x, rand(2, 14), $num, $textcolor);
//   }
//   header('Content-type: image/png');
//   imagepng($image);
//   imagedestroy($image);
//
//
// $_SESSION['capchaid'] = $digit;
//
?>
