<?php


    session_start();
    echo '<pre>';
    print_r($_SESSION);
    echo '<pre>';

    if(isset($_SESSION['age'])){
        unset($_SESSION['age']);
    }
    // else{
    //     $_SESSION['age'] = 20;
    // }

    echo '<pre>';
    print_r($_SESSION);
    echo '<pre>';
?>