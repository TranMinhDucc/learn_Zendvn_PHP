<?php
    

    session_start();
    echo $_SESSION['function'] = '<?php
                                function checkNumber($number){
                                    return ($number % 2 == 0) ? "Số chẵn" : "Số lẻ";
                                }
                            ?>';

    // echo '<pre>';
    // print_r($_SESSION);
    // echo '<pre>';

    eval('?>'.$_SESSION['function']);

    echo checkNumber(3);
?>