<?php

// Code is from:
// https://code.tutsplus.com/tutorials/build-your-own-captcha-and-contact-form-in-php--net-5362
 
session_start();
unset($_SESSION['captcha_text']);

ini_set('display_errors', 1);
error_reporting(E_ALL);

ob_end_clean();


 
$permitted_chars = 'ABCDEFGHJKLMNPQRSTUVWXYZ12346789';
  
function generate_string($input, $strength = 10) {
    $input_length = strlen($input);
    $random_string = '';
    for($i = 0; $i < $strength; $i++) {
        $random_character = $input[mt_rand(0, $input_length - 1)];
        $random_string .= $random_character;
    }
  
    return $random_string;
}
 
$image = imagecreatetruecolor(200, 50);
 
imageantialias($image, true);
 
$colors = [];
 
$red = rand(125, 175);
$green = rand(125, 175);
$blue = rand(125, 175);
 
for($i = 0; $i < 5; $i++) {
  $colors[] = imagecolorallocate($image, $red - 20*$i, $green - 20*$i, $blue - 20*$i);
}
 
imagefill($image, 0, 0, $colors[0]);
 
for($i = 0; $i < 10; $i++) {
  imagesetthickness($image, rand(2, 10));
  $line_color = $colors[rand(1, 4)];
  imagerectangle($image, rand(-10, 190), rand(-10, 10), rand(-10, 190), rand(40, 60), $line_color);
}
 
$black = imagecolorallocate($image, 0, 0, 0);
$white = imagecolorallocate($image, 255, 255, 255);
$textcolors = [$black, $white];
 
//$fonts = ['./fonts/arial.ttf', './fonts/ariali.ttf', './fonts/BRADHITC.TTF', './fonts/Gabriola.ttf', './fonts/LHANDW.TTF', './fonts/comic.ttf', './fonts/comici.ttf', './fonts/segoesc.ttf'];
$fonts = [realpath('fonts/arial.ttf'), realpath('fonts/ariali.ttf'), realpath('fonts/BRADHITC.TTF'), realpath('fonts/Gabriola.ttf'), realpath('fonts/LHANDW.TTF'), realpath('fonts/comic.ttf'), realpath('fonts/comici.ttf'), realpath('fonts/segoesc.ttf')];
 
$string_length = 6;
$captcha_string = generate_string($permitted_chars, $string_length);
 
$_SESSION['captcha_text'] = $captcha_string;
 
for($i = 0; $i < $string_length; $i++) {
  $letter_space = 170/$string_length;
  $initial = 15;
   
  imagettftext($image, 24, rand(-15, 15), $initial + $i*$letter_space, rand(25, 45), $textcolors[rand(0, 1)], $fonts[array_rand($fonts)], $captcha_string[$i]);
}
 
header('Content-type: image/png');
imagepng($image);
imagedestroy($image);
 
?>