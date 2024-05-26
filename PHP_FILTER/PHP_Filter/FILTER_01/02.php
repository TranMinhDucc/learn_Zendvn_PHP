<?php

    $value = 'tuongtacsale@gmail.com';

    // Kiểm tra có phải Email không

    if(!filter_var($value, FILTER_VALIDATE_EMAIL)){
        echo "Khong la kieu EMAIL";
    }else {
        echo "La kieu EMAIL";
    }

?>