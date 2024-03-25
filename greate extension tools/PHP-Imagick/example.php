<?php

// To resize an image:
$image = new Imagick('image.jpg');
$image->resize(200, 200);
$image->write('resized_image.jpg');



// To crop an image:
$image = new Imagick('image.jpg');
$image->crop(100, 100, 0, 0);
$image->write('cropped_image.jpg');


// To convert an image to a different format:
$image = new Imagick('image.jpg');
$image->setImageFormat('png');
$image->write('image.png');


// To add text to an image:
$image = new Imagick('image.jpg');
$image->drawAnnotation(0, 0, 'This is some text');
$image->write('annotated_image.jpg');


// To apply a special effect to an image:
$image = new Imagick('image.jpg');
$image->sepiaTone(80);
$image->write('sepia_image.jpg');
