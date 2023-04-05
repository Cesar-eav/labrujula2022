<?php

$dir = '..../storage/img';
$files = scandir($dir);

$ext_list = ['jpg', 'gif', 'png'];

foreach($files as $image_file)
{
        $l =strtolower($image_file);
        $parse_file_name = explode(".", $l);
        $file_ext = end($parse_file_name);

        if(in_array($file_ext, $ext_list))
        {
            $images [] = $image_file;
        }

}



?>