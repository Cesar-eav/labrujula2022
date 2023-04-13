<?php

// $dir = './storage/miradores/hoy.jpeg';

// $files = scandir($dir);

// $ext_list = ['jpg', 'gif', 'png', 'JPG'];

    
//             $exif_data = exif_read_data($dir);
//             print "<pre>";
//             print_r($exif_data);
//             print "<pre>";
//             exit;


// print "<pre>";
// print_r($exif_data);
// print "<pre>";



$image_path = './storage/miradores/IMG_20230404_144444.jpg';
$exif = exif_read_data($image_path);

// Check if the Exif data was successfully read
if ($exif === false) {
    echo 'The image does not contain Exif data';
} else {
    // Output some of the Exif data
    print "<pre>";
    print_r($exif);
    print "<pre>";
    echo 'Camera make: ' . $exif['Make'] . '<br>';
    echo 'Camera model: ' . $exif['Model'] . '<br>';
    echo 'Exposure time: ' . $exif['ExposureTime'] . '<br>';
    echo 'Aperture: f/' . $exif['FNumber'] . '<br>';
    echo 'ISO speed: ' . $exif['ISOSpeedRatings'] . '<br>';
}


?>