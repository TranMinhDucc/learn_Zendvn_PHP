<?php
    session_start();
    $image = "logo_mvc.png";

    if(file_exists($image)){
        echo "File exits";  
        $_SESSION['image']['info'] = getimagesize($image);
        $_SESSION['image']['data'] = file_get_contents($image);
      
    }else{
        echo "File not exits";  
    }
    echo '<pre>';
    print_r($_SESSION);
    echo '<pre>';

?>