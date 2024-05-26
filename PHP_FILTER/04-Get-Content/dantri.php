<?php
    $content = file_get_contents('https://dantri.com.vn/the-thao.htm');

    $pattern	= '#class="mt3 clearfix">.*src="(.*)".*class="fon6".*>(.*)<.*fon5 wid324 fl">(.*)<#imsU';

    preg_match_all($pattern, $content, $matches);
    echo '<pre>';
    print_r($matches);
    echo '<pre>';
?>