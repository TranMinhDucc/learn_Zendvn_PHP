<?php
    
    session_start();

    $_SESSION['course'] = 'PHP';
    $_SESSION['info'] = array(
        'teacher' => 'ZEND',
        'time' => 100,
    );
   
    echo $session = session_encode();

    session_unset();

    echo '<pre>';
    print_r($_SESSION);
    echo '<pre>';

    session_decode($session);

    echo '<pre>';
    print_r($_SESSION);
    echo '<pre>';


?>