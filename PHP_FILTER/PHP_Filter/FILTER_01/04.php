<?php

    $value = '127.0.0.1';

    // Kiểm tra có phải địa chỉ IP không

    if(!filter_var($value, FILTER_VALIDATE_IP)){
        echo "Khong la kieu IP";
    }else {
        echo "La kieu IP";
    }

?>