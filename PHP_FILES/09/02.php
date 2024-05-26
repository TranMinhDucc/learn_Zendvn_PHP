<?php
    $path = 'abc/def';

 //   rmdir($path); // xóa thư mục def

    if(file_exists($path) == true){
        rmdir($path);
    }
?>