<?php
/*session_start();
$captchanumber = rand(1000,9999);
$_SESSION["code"] = $captchanumber;
$image = imagecreate($height=100,$width=189);
$foreground = imagecolorallocate($image, 255, 255, 255);
//imagefill($image, 0, 0, $bg);
imagestring($image, 5,1,4, $captchanumber, 0);
header('Content-type: image/png');

imagepng($image);
*/

?>
<?PHP
  $image = imagecreatetruecolor(120, 30) or die("Cannot Initialize new GD image stream");

  $background = imagecolorallocate($image, 0xFF, 0xFF, 0xFF);
  imagefill($image, 0, 0, $background);
  $linecolor = imagecolorallocate($image, 0xCC, 0xCC, 0xCC);
  $textcolor = imagecolorallocate($image, 0x33, 0x33, 0x33);

  for($i=0; $i < 6; $i++) {
    imagesetthickness($image, rand(1,4));
    imageline($image, 0, rand(0,30), 120, rand(0,30), $linecolor);
  }
session_start();
  $digit = '';
  for($x = 15; $x <= 95; $x += 20) {
    $digit.=($num = rand(0, 9));
    imagechar($image, rand(3, 5), $x, rand(2, 14), $num, $textcolor);
  }
  header('Content-type: image/png');
  imagepng($image);
  imagedestroy($image);


$_SESSION['capchaid'] = $digit;
?>
