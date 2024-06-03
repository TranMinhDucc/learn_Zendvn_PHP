<?php


    session_start();
    session_destroy(); // xóa tất cả sesseion
    echo '<pre>';
    print_r($_SESSION);
    echo '<pre>';
?>