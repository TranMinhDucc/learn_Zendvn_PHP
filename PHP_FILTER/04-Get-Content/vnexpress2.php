<?php
    $content = file_get_contents('https://vnexpress.net/the-gioi/quan-su');
    $pattern = '#<article class="item-news thumb-left item-news-common">(.*)</article>#imsU';
    preg_match_all($pattern, $content, $matches);
    $result = array();
    foreach($matches[0] as $key => $value){

        // Link
        $pattern = '#href="(.*)"#imsU';
        preg_match($pattern, $value, $link);
        $result[$key]['link'] = $link[1];

        // IMAGE
        $pattern = '#src="(.*)"#imsU';
        preg_match($pattern, $value, $image);
        $result[$key]['image'] = $image[1];

        // TITLE
        $pattern = '#<h2 class="title-news".*>(.*)</h2>#imsU';
        preg_match($pattern, $value, $title);
        $result[$key]['title'] = trim($title[1]);

        // DESCRIPTION
        $pattern = '#<p class="description">(.*)</p>#imsU';
        preg_match($pattern, $value, $description);
        $result[$key]['description'] = trim($description[1]);
    }
    echo "<pre>";
    print_r($result);
    echo "<pre>";
    