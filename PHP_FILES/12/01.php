<?php

// parse_ini_file('$filename') để đọc nội dung $filename thành 1 mảng

// Nếu muốn đọc luôn các phần section cần truyền giá trị true vào tham số thứ 2

$data = parse_ini_file('test.ini',TRUE);


    echo "<pre>";
    print_r($data);
    echo "<pre>";