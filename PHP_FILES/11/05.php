<?php 

    // glob ( $ pattern ) để lấy danh sách các tập tin thư mục  và thư mục với tên thõa mãn  $pattern

    // sử dụng tham số thứ 2  GLOB_ONLYDIR  để kết quả trả về chỉ bao gồm các thư mục

    $array = glob('*',GLOB_ONLYDIR); // chỉ lấy những tập tin là thư mục

    echo "<pre>";
    print_r($array);
    echo "<pre>";

?>