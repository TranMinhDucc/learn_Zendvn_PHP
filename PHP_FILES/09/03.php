<?php

$path = 'abc/gh';

if(file_exists($path) == true){
    mkdir($path, 0666);  // 666 = rw-rw-rw;

}
fileperms($path); // xem quyền truy cập thư mục path

chmod($path, 0555);   // cấp quyền truy cập;
echo substr(sprintf('%o',fileperms($path)),-4);