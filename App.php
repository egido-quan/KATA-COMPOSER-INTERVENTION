<?php

require './vendor/autoload.php';
 
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;
//use Intervention\Image\Drivers\Imagick\Driver;


// create new manager instance with desired driver
$manager = new ImageManager(new Driver());

$image = $manager->read('images/alcaraz_full_2024.png');
$image->text('Zverev me ha pelado', 50, 300, function ($font) {
    $font->filename('./fonts/Serif_Hand.ttf');
    $font->size(58);
    $font->color('red');
    $font->align('left');
    $font->valign('top');
    $font->angle(20);
    $font->wrap(250);
    $font->stroke('blue', 2);
});
$encoded = $image->toJpeg(90);
$encoded->save('images/Alcaraz_texto.jpg');

$image = $manager->read('images/dimitrov_full_2024.png');
$image = $image->pixelate(5);
$encoded = $image->toJpeg(90);
$encoded->save('images/Dimitrov_pixelado.jpg');

$image = $manager->read('images/medvedev_full_2024.png');
$image = $image->greyscale();
$encoded = $image->toJpeg(90);
$encoded->save('images/Medvedev_bw.jpg');


