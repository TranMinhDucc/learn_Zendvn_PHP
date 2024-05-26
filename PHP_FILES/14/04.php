<?php
    $dir = dir('image');
    $dir = dir('.');
    $dir = dir('..');

    while(($file = $dir->read())!= false ){
        echo 'filename:' .$file . "<br>";
    }
?>