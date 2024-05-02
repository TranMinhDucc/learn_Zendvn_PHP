<?php
    // $date = date_parse_from_format('d/m/Y h:i:s','15/26/2004 12:09:09');
    //     echo "<pre>";
    //     print_r($date);
    //     echo "<pre>";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Làm việc với thời gian</title>
</head>
<body>
    <h1>Làm việc với thời gian</h1>
    <?php
        function testLestYear($year){
            $flag = false;
            if( $year % 400 == 0 || ( $year % 4 == 0 && $year % 100 != 0 )) $flag = true;
            return $flag;
        }

        $year = 2012;
        if(testLestYear($year)){
            echo "Năm nhuận";
        }else {
            echo "Không là năm nhuận";
        }
    ?>
</body>
</html>