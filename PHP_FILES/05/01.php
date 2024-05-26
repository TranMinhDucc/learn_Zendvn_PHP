<?php
    $fileName = 'files/abc.txt';
    if(file_exists($fileName)){
        $data = file($fileName);
        unset($data[2]);  // xóa nội dung dòng 3
    }else{
        echo "Tập tin không tồn tại";
    }
?>