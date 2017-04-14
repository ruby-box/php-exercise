<?php
//Load the stamp and the photo to apply the watermark
$stamp = imagecreatefrompng('text.png');
$img = imagecreatefrompng('origin.png');

//Set the margins for the stamp and get the height/width of the

$marge_right = 10;
$marge_bottom = 10;
$sx = imagesx($stamp);
$sy = imagesy($stamp);

//Copy the stamp image onto our photo using the margin offsets
imagecopy($img, $stamp, imagesx($img) - $sx - $marge_right, imagesy($img) - $sy - $marge_bottom, 0, 0, imagesx($stamp), imagesy($stamp));
 
// Output and free memory
header('Content-type:image/png');
imagepng($img);
imagedestroy($img);
?>