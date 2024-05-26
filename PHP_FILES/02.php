<?php 
    $fileName = 'file/abc.txt';

    // filetype cho biết là tập tin hay thư mục
    $type = filetype($fileName);

    echo $type;
?>