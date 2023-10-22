<?php
session_start();
$captchaCode = substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, 4);
$_SESSION['captcha_code'] = $captchaCode;
$width = 150;
$height = 50;
$image = imagecreatetruecolor($width, $height);

$backgroundColor = imagecolorallocate($image, 255, 255, 255);
imagefill($image, 0, 0, $backgroundColor);
$textColor = imagecolorallocate($image, 0, 0, 0);
$font = 'arial.ttf'; 
imagettftext($image, 20, 0, 30, 30, $textColor, $font, $captchaCode);

header('Content-type: image/png');
imagepng($image);
imagedestroy($image);
?>
