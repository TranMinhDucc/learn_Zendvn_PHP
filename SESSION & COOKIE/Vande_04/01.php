<?php 
    $variable = 'This is a string';
    session_start();
    // session_unset();
    $_SESSION['variable'] = $variable;
    echo '<pre>';
    print_r($_SESSION);
    echo '<pre>';
?>