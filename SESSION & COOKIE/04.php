<?php
    session_start();
    if(isset($_SESSION['name'])){
        echo 'Tồn tại';
    }else{
        echo "Không tồn tại";
    }