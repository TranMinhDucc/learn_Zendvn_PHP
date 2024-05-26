<?php
    $value = '084-08-38.203456';
    $options = array(
        'options' => array('regexp' => '#084-[0-9]{2}-[0-9]{2}\.[0-9]{6}#')
    );
    if(!filter_var($value, FILTER_VALIDATE_REGEXP, $options)){
        echo '0 Thỏa mãn';
    }else{
        echo 'Thỏa mãn';
    }

?>