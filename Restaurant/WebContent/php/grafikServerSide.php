<?php
function printImage()
{
    $my_img = imagecreate(400, 20);
    $background = imagecolorallocate($my_img, 69, 91, 79);
    $text_colour = imagecolorallocate($my_img, 0, 0, 0);
    $line_colour = imagecolorallocate($my_img, 0,0,0);
    imagestring($my_img, 2, 10, 2, "copyright by robert schwarz and marius hommann", $text_colour);
    imagesetthickness($my_img, 1);
    //imageline($my_img, 30, 45, 196, 45, $line_colour);
    imageline($my_img, 0, 0, 400, 0, $line_colour); // oben
    imageline($my_img, 0, 0, 0, 20, $line_colour); // links
    imageline($my_img, 0, 20, 400, 20, $line_colour); // unten
    imageline($my_img, 400, 0, 400, 20, $line_colour); // rechts

    // header( "Content-type: image/png" );
    // Bild ausgeben
    imagepng($my_img, "../pictures/test.png");

    echo "<img src='../pictures/test.png'>";

    // Bilddaten zurücksetzen
    imagedestroy($my_img);
}
?> 