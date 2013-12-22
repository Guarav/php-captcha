<?php

// fonts directory
$dir = 'fonts/';

//create a simple 170 x 60 image
$image = imagecreatetruecolor(170, 60);

//black background
$black = imagecolorallocate($image, 0, 0, 0);

//mixture of red blue and green 
$color = imagecolorallocate($image, 200, 100, 90); 

//white color
$white = imagecolorallocate($image, 255, 255, 255);
$fontSize = 3;

//fill your image with a black rectangle
imagefilledrectangle($image,0,0,399,99,$black);

// add a text on the image with Open-sans font
imagettftext ($image, 30, 0, 10, 40, $color,  $dir.'OpenSans-Bold-webfont.ttf' , 'gaurav');

// just set the header and you are ready to go
header("Content-type: image/png");
imagepng($image);
?>
