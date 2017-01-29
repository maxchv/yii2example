<?php
//ini_set('display_errors', true);
//error_reporting(E_ALL);
header("Content-type:image/jpeg");
$img = imagecreatetruecolor(800, 750);
imagefilledrectangle($img, 0, 0, 800, 750, 0x0000ff);
imagettftext($img, 100, 0, 100, 150, 0xff0000, 'arial.ttf', 'test');

imagefilledarc($img, 400, 400, 200, 200, 0, 45, 0xffffff, IMG_ARC_ROUNDED);

imagejpeg($img, null, 100);
imagedestroy($img);