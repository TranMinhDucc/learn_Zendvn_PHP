<?php

    function tinh($number){
        $result = 1;
        if($number > 1)
            // {
            //     for($i = 1; $i <= $number; $i++){
            //             $result *= $i;
            //     }
            // }
            $result = $number * tinh($number - 1);
        return $result;
    }

    echo tinh(4);

?>