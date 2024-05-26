<?php
    $path = '/file/abc.txt';
    // hiện thị tên tập tin ( có luôn phần mở rộng )
    echo basename($path) . '<br>';

    // hiện thị tên tập tin ( 0 có   phần mở rộng )
    echo basename($path,'.txt');
?>