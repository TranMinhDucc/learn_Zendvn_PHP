<?php
    $fileName = 'file/abc.txt';
    
    $record = file($fileName); // đọc tập tin fileName thành một mảng

    echo $data = file_get_contents($fileName);  

    echo '<br>';

    echo $space = substr_count($data,' ');

    preg_match_all('#\S#imsU', $data, $matches);
    preg_match_all('#\S\s\S#imsU', $data, $spaces);

    $chaNoSpace = count($matches[0]);

    echo '<pre>';
    print_r($record);
    echo '<pre>';

    echo '<ul>';
        echo '<li>'.'Tổng số dòng là'.' '.count($record).'</li>';
        echo '<li>'.'Tổng số từ là'.' '.str_word_count($data).'</li>';
        echo '<li>'.'Tổng số khoản trắng'.' '. $space.'</li>';
        echo '<li>'.'Tổng số kí tự'.' '. count($spaces[0]).'</li>';
        echo '<li>'.'Tổng số kí tự ( No Space )'.' '. $chaNoSpace.'</li>';
    echo '</ul>';
?>