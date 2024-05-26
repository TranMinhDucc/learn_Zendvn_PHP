<?php
    $value = 'duc.jpsg';

    // JPG | PNG | GIF

    $options = array(
        'options' => array('regexp' => '#\.(jpg|png|gif)$#')
    );
    if(!filter_var($value, FILTER_VALIDATE_REGEXP, $options)){
        echo '0 Thỏa mãn';
    }else{
        echo 'Thỏa mãn';
    }

?>