<?php 
    $fileName = 'file/abc.txt';

    // filesize cho biết dung lượng tập tin
    $size = filesize($fileName);

   

    // 1KB = 1024B
    // 1MB = 1024KB 
    // 1GB = 1024MB 
    // 1T = 1024GB 

    function convertSize($size, $totalDigit = 2, $ditance = ' '){
        $units =  array('B','KB', 'MB', 'GB', 'TB');

        $length = count($units);
        for($i = 0; $i < $length; $i++){
            if($size > 1024){
                $size = $size / 1024;
            }else{
                $units = $units[$i];
                break;
            }
        }
        $result = round($size,$totalDigit) . $ditance .$units;
        return $result;
    }

    echo convertSize($size)
?>