<?php

    $x = false;

    // echo filter_var($x, FILTER_VALIDATE_BOOLEAN);

    if(!filter_var($x, FILTER_VALIDATE_BOOLEAN)){
        echo "Khong la kieu BOOLEAN";
    }else {
        echo "La kieu BOOLEAN";
    }

?>