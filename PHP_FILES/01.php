<?php 
    $fileName = 'file/abc.txt';

    // file_exists kiểm tra sự tồn tại của file
    if(file_exists($fileName)){
        echo "Tồn tại";
    }else{
        echo "Không tồn tại";
    }
?>