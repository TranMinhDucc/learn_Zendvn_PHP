<?php
    $path = '/file/abc.txt';
    
    $basename = pathinfo($path,PATHINFO_BASENAME);
    $extension = pathinfo($path,PATHINFO_EXTENSION);
    $filename = pathinfo($path,PATHINFO_FILENAME);

    echo '<li>PATH'.' '.'<b>'.$path.'</b>'.'</li>';
    echo '<li>PATHINFO_BASENAME'.' '.'<b>'.$basename.'</b>'.'</li>';
    echo '<li>PATHINFO_EXTENSION'.' '.'<b>'.$extension.'</b>'.'</li>';
    echo '<li>PATHINFO_BASENAME'.' '.'<b>'.$filename.'</b>'.'</li>';

    // [dirname] => /file
    // [basename] => abc.txt
    // [extension] => txt
    // [filename] => abc

   
   
?>