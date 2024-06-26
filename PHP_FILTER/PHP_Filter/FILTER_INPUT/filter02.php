<?php

$filter = array(
        'name' => array(
            'filter' => FILTER_CALLBACK,
            'options' => 'ucwords'
        ),
        'age' => array(
            'filter' => FILTER_VALIDATE_INT,
            'options' => array('min_range' => 1, 'max_range' => 1000)
        ),
        'email' => array(
            'filter' => FILTER_VALIDATE_EMAIL
        ),
    );
    $result = filter_input_array(INPUT_POST,  $filter);
    echo "<pre>";
    print_r($result);
    echo "<pre>";
?>