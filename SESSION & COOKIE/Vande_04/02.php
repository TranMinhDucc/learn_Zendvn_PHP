<?php 
    // Lưu mảng vào session
    $array = array(
        array('course' => 'Joomla', 'time' => 80),
        array('course' => 'Zend', 'time' => 90),
        array('course' => 'PHP', 'time' => 70),
    );
    $variable = 'This is a string';
    session_start();
    // session_unset();
    $_SESSION['array'] = $array;
    echo '<pre>';
    print_r($_SESSION);
    echo '<pre>';
?>