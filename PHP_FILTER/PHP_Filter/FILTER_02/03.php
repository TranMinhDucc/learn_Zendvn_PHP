<?php
    $value = 'zendvn1rar';

    // JPG | PNG | GIF

    $options = array(
        'options' => array('regexp' => '#^[a-zA-Z0-9]+$#')
    );
    if(!filter_var($value, FILTER_VALIDATE_REGEXP, $options)){
        echo '0 Phải là chữ và số ';
    }else{
        echo 'là chữ và số';
    }

?>