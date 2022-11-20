<?php

$file = 'extras/users.txt';

if (file_exists($file)){
//    echo readfile($file);
    $handle = fopen($file, 'r'); // just like read and write in python | read mode in this case
    $data = fread($handle, filesize($file));
    fclose($handle);

    echo $data;



} else{
    $handle= fopen($file, 'w'); // write mode
    $data = 'I love Django';
    fwrite($handle, $data);
    fclose($handle);
}



