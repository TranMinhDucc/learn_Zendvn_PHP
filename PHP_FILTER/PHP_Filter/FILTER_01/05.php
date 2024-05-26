<?php

    $value = 'https://training.zendvn.com/';

    // Kiểm tra có phải URL không

    if(!filter_var($value, FILTER_VALIDATE_URL)){
        echo "Khong la kieu URL";
    }else {
        echo "La kieu URL";
    }

?>