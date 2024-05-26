<?php

    $value = 6.03;

    $int_options = array("options"=>array("min_range"=>5, "max_range"=>10));

    // Kiểm tra có phải Email không

    if(!filter_var($value, FILTER_VALIDATE_FLOAT, $int_options)){
        echo "Khong la kieu FLOAT";
    }else {
        echo "La kieu FLOAT";
    }

?>