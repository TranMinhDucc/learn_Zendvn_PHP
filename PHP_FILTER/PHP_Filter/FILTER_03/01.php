<?php
    $data = array(
        'name' => 'Nguyen Van A',
        'age' => 23,
        'email' => 'nva@gmail.com'
    );

    $filter = array(
        'name' => array(
            'filter' => FILTER_CALLBACK,
            'options' => 'ucwords'
        ),
        'age' => array(
            'filter' => FILTER_VALIDATE_INT,
            'options' => array('min_range' => 1, 'max_range' => 100)
        ),
        'email' => array(
            'filter' => FILTER_VALIDATE_EMAIL,
        ),
    );

    $result = filter_var_array($data, $filter);
    echo '<pre>';
    print_r($result);
    echo '<pre>';

    // echo ucwords('nguyen van a');
?>