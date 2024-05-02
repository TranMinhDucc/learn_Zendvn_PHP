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
        $result = date("h:i A D, d/m/Y", time());

        $arrEn = array('Mon','Tue','Web','Thu','Fri','Sat','Sun');
        $arrVi = array('Thứ 2','Thứ 3','Thứ 4','Thứ 5','Thứ 6','Thứ 7','Chủ Nhật');

        $result = str_replace($arrEn, $arrVi, $result);
        $result = str_replace(',', ' Ngày', $result); // thay thế

        echo $result;
    ?>
</body>
</html>