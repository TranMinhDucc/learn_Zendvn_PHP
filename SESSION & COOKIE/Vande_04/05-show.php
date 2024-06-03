<?php

    session_start();
    header('Content-type: image/png');
    echo $_SESSION['image']['data'];
    // echo '<pre>';
    // print_r($_SESSION['image']['data']);
    // echo '<pre>';
?>