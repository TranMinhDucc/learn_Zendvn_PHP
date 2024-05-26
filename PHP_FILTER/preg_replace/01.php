<?php
    $content = file('khoa-hoc.txt') or die('Cannot read file');
    $content = implode('',$content);
    $pattern =  '#Zend Framework#';
    $replacement = '<a href="www.zend.vn">Zend Framework</a>';
    $result = preg_replace($pattern, $replacement, $content);
//     echo '<pre>';
//     print_r($content);
//     echo '<pre>';
    echo $result;
?>