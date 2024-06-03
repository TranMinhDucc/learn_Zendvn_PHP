<?php
    setcookie('lastLogin', time(), time() + 3600);
    if(isset($_COOKIE['lastLogin'])){
        $tine = $_COOKIE['lastLogin'];
        echo 'Last login: ' .date('d/m/Y H:i:s');
        setcookie('lastLogin', time());
    }else{
        setcookie('lastLogin', time(), time() + 3600);
    }
?>