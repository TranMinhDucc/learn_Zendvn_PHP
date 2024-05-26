<?php
    $content = file_get_contents('https://www.agribank.com.vn/vn/ty-gia');
    $pattern = '#(?<=tyGiaCn">).*(?=</table>)#imsu';
    preg_match($pattern, $content, $matches);
    
  
    // echo $content;
    echo '<pre>';
    print_r($matches);
    echo '<pre>';
?>