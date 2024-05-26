<?php
    $path = '/file/abc.txt';
    
    $pathInfo = pathinfo($path);

    echo '<pre>';
    print_r($pathInfo)  . '<br>';
    echo '<pre>';

    // [dirname] => /file
    // [basename] => abc.txt
    // [extension] => txt
    // [filename] => abc

   
   
?>